<?php

namespace Modules\GCore\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypographySettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typographySettings = [
            "typography-theme-name" => "Default Light Typography Theme",
            "google-fonts" => [
                "primary-font" => [
                    "name" => "Roboto",
                    "weights" => ["300", "400", "500", "700"],
                    "url-import" => "https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
                ],
                "secondary-font" => [
                    "name" => "Open Sans",
                    "weights" => ["400", "600"],
                    "url-import" => "https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap"
                ],
                "monospace-font" => [
                    "name" => "Fira Code",
                    "weights" => ["400"],
                    "url-import" => "https://fonts.googleapis.com/css2?family=Fira+Code:wght@400&display=swap"
                ]
            ],
            "text-elements" => [
                "heading" => [
                    "h1" => [
                        "font-family" => "var(--primary-font)",
                        "font-size" => "3.5rem",
                        "font-weight" => "700",
                        "line-height" => "1.2",
                        "letter-spacing" => "-0.02em",
                        "text-align" => "left",
                        "text-transform" => "none",
                        "color" => "var(--main-text-color)",
                        "margin-top" => "2rem",
                        "margin-bottom" => "1rem",
                        "padding" => "0"
                    ],
                    "h2" => [
                        "font-family" => "var(--primary-font)",
                        "font-size" => "2.5rem",
                        "font-weight" => "600",
                        "line-height" => "1.3",
                        "letter-spacing" => "-0.01em",
                        "text-align" => "left",
                        "text-transform" => "none",
                        "color" => "var(--main-text-color)",
                        "margin-top" => "1.8rem",
                        "margin-bottom" => "0.9rem",
                        "padding" => "0"
                    ],
                    "h3" => [
                        "font-family" => "var(--primary-font)",
                        "font-size" => "2rem",
                        "font-weight" => "600",
                        "line-height" => "1.4",
                        "letter-spacing" => "0",
                        "text-align" => "left",
                        "text-transform" => "none",
                        "color" => "var(--main-text-color)",
                        "margin-top" => "1.6rem",
                        "margin-bottom" => "0.8rem",
                        "padding" => "0"
                    ],
                    "h4" => [
                        "font-family" => "var(--primary-font)",
                        "font-size" => "1.5rem",
                        "font-weight" => "500",
                        "line-height" => "1.5",
                        "letter-spacing" => "0",
                        "text-align" => "left",
                        "text-transform" => "none",
                        "color" => "var(--main-text-color)",
                        "margin-top" => "1.4rem",
                        "margin-bottom" => "0.7rem",
                        "padding" => "0"
                    ],
                    "h5" => [
                        "font-family" => "var(--primary-font)",
                        "font-size" => "1.25rem",
                        "font-weight" => "500",
                        "line-height" => "1.6",
                        "letter-spacing" => "0",
                        "text-align" => "left",
                        "text-transform" => "none",
                        "color" => "var(--main-text-color)",
                        "margin-top" => "1.2rem",
                        "margin-bottom" => "0.6rem",
                        "padding" => "0"
                    ],
                    "h6" => [
                        "font-family" => "var(--primary-font)",
                        "font-size" => "1rem",
                        "font-weight" => "500",
                        "line-height" => "1.7",
                        "letter-spacing" => "0",
                        "text-align" => "left",
                        "text-transform" => "none",
                        "color" => "var(--main-text-color)",
                        "margin-top" => "1rem",
                        "margin-bottom" => "0.5rem",
                        "padding" => "0"
                    ]
                ],
                "paragraph" => [
                    "font-family" => "var(--secondary-font)",
                    "font-size" => "1rem",
                    "font-weight" => "400",
                    "line-height" => "1.7",
                    "text-align" => "left",
                    "text-indent" => "0",
                    "color" => "var(--main-text-color)",
                    "margin-top" => "0",
                    "margin-bottom" => "1rem",
                    "padding" => "0"
                ],
                "list" => [
                    "font-family" => "var(--secondary-font)",
                    "font-size" => "1rem",
                    "font-weight" => "400",
                    "line-height" => "1.7",
                    "color" => "var(--main-text-color)",
                    "bullet-color" => "var(--accent-color)",
                    "indentation" => "1.5rem",
                    "item-spacing" => "0.5rem"
                ],
                "blockquote" => [
                    "font-family" => "var(--secondary-font)",
                    "font-size" => "1.1rem",
                    "font-weight" => "400",
                    "line-height" => "1.8",
                    "font-style" => "italic",
                    "text-align" => "left",
                    "color" => "var(--main-text-color)",
                    "background-color" => "var(--secondary-background-color)",
                    "border-left-color" => "var(--base-border-color)",
                    "border-left-width" => "4px",
                    "margin" => "1.5rem 0",
                    "padding" => "1rem 1.5rem"
                ],
                "code-block" => [
                    "font-family" => "var(--monospace-font)",
                    "font-size" => "0.9rem",
                    "font-weight" => "400",
                    "line-height" => "1.5",
                    "color" => "var(--code-text)",
                    "background-color" => "var(--code-background)",
                    "padding" => "1rem",
                    "border-radius" => "0.5rem",
                    "line-numbers-color" => "var(--secondary-text-color)"
                ],
                "form-label" => [
                    "font-family" => "var(--primary-font)",
                    "font-size" => "0.9rem",
                    "font-weight" => "500",
                    "color" => "var(--main-text-color)",
                    "margin-bottom" => "0.5rem"
                ],
                "form-error" => [
                    "font-family" => "var(--secondary-font)",
                    "font-size" => "0.85rem",
                    "font-weight" => "400",
                    "color" => "var(--state-critical)"
                ],
                "kpi" => [
                    "value" => [
                        "font-family" => "var(--primary-font)",
                        "font-size" => "2.5rem",
                        "font-weight" => "700",
                        "color" => "var(--main-text-color)"
                    ],
                    "title" => [
                        "font-family" => "var(--secondary-font)",
                        "font-size" => "1rem",
                        "font-weight" => "400",
                        "color" => "var(--secondary-text-color)"
                    ],
                    "indicator" => [
                        "font-family" => "var(--secondary-font)",
                        "font-size" => "0.9rem",
                        "font-weight" => "500",
                        "positive-color" => "var(--state-success)",
                        "negative-color" => "var(--state-critical)"
                    ]
                ],
                "testimonial-slider" => [
                    "text" => [
                        "font-family" => "var(--secondary-font)",
                        "font-size" => "1.1rem",
                        "font-weight" => "400",
                        "line-height" => "1.8",
                        "font-style" => "italic",
                        "color" => "var(--main-text-color)"
                    ],
                    "author-name" => [
                        "font-family" => "var(--primary-font)",
                        "font-size" => "1rem",
                        "font-weight" => "600",
                        "color" => "var(--secondary-text-color)"
                    ],
                    "author-title" => [
                        "font-family" => "var(--secondary-font)",
                        "font-size" => "0.9rem",
                        "font-weight" => "400",
                        "color" => "var(--secondary-text-color)"
                    ]
                ],
                "chart-labels" => [
                    "font-family" => "var(--secondary-font)",
                    "font-size" => "0.85rem",
                    "font-weight" => "400",
                    "color" => "var(--chart-label-text)"
                ],
                "chart-tooltip" => [
                    "font-family" => "var(--secondary-font)",
                    "font-size" => "0.9rem",
                    "font-weight" => "400",
                    "color" => "var(--chart-tooltip-text)",
                    "background-color" => "var(--chart-tooltip-background)"
                ],
                "table-header" => [
                    "font-family" => "var(--primary-font)",
                    "font-size" => "0.95rem",
                    "font-weight" => "600",
                    "color" => "var(--table-header-text)"
                ],
                "table-cell" => [
                    "font-family" => "var(--secondary-font)",
                    "font-size" => "0.9rem",
                    "font-weight" => "400",
                    "color" => "var(--main-text-color)"
                ],
                "hero-section" => [
                    "title" => [
                        "font-family" => "var(--primary-font)",
                        "font-size" => "4rem",
                        "font-weight" => "700",
                        "line-height" => "1.1",
                        "color" => "var(--main-text-color)"
                    ],
                    "subtitle" => [
                        "font-family" => "var(--secondary-font)",
                        "font-size" => "1.5rem",
                        "font-weight" => "400",
                        "line-height" => "1.6",
                        "color" => "var(--secondary-text-color)"
                    ]
                ],
                "cta-section" => [
                    "title" => [
                        "font-family" => "var(--primary-font)",
                        "font-size" => "2.8rem",
                        "font-weight" => "600",
                        "line-height" => "1.2",
                        "color" => "var(--main-text-color)"
                    ],
                    "subtitle" => [
                        "font-family" => "var(--secondary-font)",
                        "font-size" => "1.2rem",
                        "font-weight" => "400",
                        "line-height" => "1.7",
                        "color" => "var(--secondary-text-color)"
                    ]
                ],
                "feature-grid" => [
                    "title" => [
                        "font-family" => "var(--primary-font)",
                        "font-size" => "1.25rem",
                        "font-weight" => "600",
                        "color" => "var(--main-text-color)"
                    ],
                    "description" => [
                        "font-family" => "var(--secondary-font)",
                        "font-size" => "0.95rem",
                        "font-weight" => "400",
                        "color" => "var(--secondary-text-color)"
                    ]
                ]
            ]
        ];

        DB::table('settings')->updateOrInsert(
            ['key' => 'typography_settings'],
            [
                'value' => json_encode($typographySettings),
                'type' => 'json',
                'description' => 'Global typography settings for text elements and Google Fonts.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
