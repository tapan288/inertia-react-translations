import { usePage } from "@inertiajs/react";

export default function __(key, replacements = {}) {
    let translation = usePage().props.translations[key];

    Object.keys(replacements).forEach((replacement) => {
        translation = translation.replace(
            `:${replacement}`,
            replacements[replacement]
        );
    });

    return translation;
}
