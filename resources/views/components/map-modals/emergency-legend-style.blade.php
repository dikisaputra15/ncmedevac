    .emergency-legend {
        display: grid;
        grid-template-columns: repeat(3, minmax(max-content, 1fr));
        align-items: start;
        gap: 16px;
        padding: 12px;
        overflow-x: auto;
    }

    .emergency-legend .class-column {
        text-align: left;
    }

    .emergency-legend > .classification > .class-column > .class-header,
    .emergency-legend > .classification > .class-header {
        text-transform: uppercase;
    }

    .emergency-legend-medical .class-column {
        flex: 1 0 auto;
    }

    .emergency-legend-medical .class-column > .classification,
    .emergency-legend-police .legend-grid {
        display: flex;
        flex-wrap: nowrap;
        justify-content: flex-start;
        gap: 4px;
    }

    .emergency-legend-medical .legend-grid-item,
    .emergency-legend-police .legend-grid-item {
        flex: 0 0 auto;
        width: auto;
    }
