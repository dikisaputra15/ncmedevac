const policeCategoryAliases = @json(\App\Models\Police::CATEGORY_ALIASES);

function matchesPoliceCategories(police, selectedCategories = []) {
    if (selectedCategories.length === 0) return true;

    const categories = (police.category || '').split(',').map(category => category.trim().toLowerCase());
    return selectedCategories.some(category =>
        policeCategoryAliases[category].some(alias => categories.includes(alias.toLowerCase()))
    );
}
