export default function UseBootstrapTag(target: HTMLInputElement): {
    getValue: () => string;
    getValues: () => string[];
    addValue: (value: string | string[]) => void;
    removeValue: (value: string | string[]) => void;
};
