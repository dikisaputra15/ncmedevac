.hospital-legend {
    max-width: 100%;
    overflow-x: auto;
    color: #25364a;
}

.hospital-legend-title {
    position: sticky;
    left: 0;
    margin-bottom: 4px;
    font-weight: 700;
}

.hospital-legend-groups {
    display: grid;
    grid-template-columns: repeat(3, max-content);
    width: max-content;
}

.hospital-legend-heading {
    padding: 3px 10px;
    border-bottom: 3px solid;
    font-size: 0.875rem;
    font-weight: 600;
}

.hospital-legend-heading--advanced { border-color: #397fff; }
.hospital-legend-heading--intermediate { border-color: #48d12c; }
.hospital-legend-heading--basic { border-color: #b4a911; }

.hospital-legend-items {
    display: flex;
    padding: 4px;
}

.hospital-legend-item.btn {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 4px 6px;
    text-align: left;
    white-space: nowrap;
}

.hospital-detail-legend .hospital-legend-title {
    text-align: center;
}

.hospital-detail-legend .hospital-legend-groups {
    grid-template-columns: repeat(3, minmax(max-content, 1fr));
    width: 100%;
}
