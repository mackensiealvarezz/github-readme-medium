<svg width="495" height="195" viewBox="0 0 495 195" fill="none" xmlns="http://www.w3.org/2000/svg">
    <style>
        .header {
            font: 600 18px 'Segoe UI', Ubuntu, Sans-Serif;
            fill: #030303;
            animation: fadeInAnimation 0.8s ease-in-out forwards;
        }

        .stat {
            font: 600 14px 'Segoe UI', Ubuntu, "Helvetica Neue", Sans-Serif;
            fill: #333;
        }

        .stagger {
            opacity: 0;
            animation: fadeInAnimation 0.3s ease-in-out forwards;
        }

        .rank-text {
            font: 800 24px 'Segoe UI', Ubuntu, Sans-Serif;
            fill: #333;
            animation: scaleInAnimation 0.3s ease-in-out forwards;
        }

        .bold {
            font-weight: 700
        }

        .icon {
            fill: #4c71f2;
            display: block;
        }

        /* Animations */
        @keyframes scaleInAnimation {
            from {
                transform: translate(-5px, 5px) scale(0);
            }

            to {
                transform: translate(-5px, 5px) scale(1);
            }
        }

        @keyframes fadeInAnimation {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>

    <rect data-testid="card-bg" x="0.5" y="0.5" rx="4.5" height="99%" stroke="#E4E2E2" width="494" fill="#fffefe"
        stroke-opacity="0" />


    <g data-testid="card-title" transform="translate(25, 35)">
        <g transform="translate(0, 0)">
            <text x="0" y="0" class="header" data-testid="header">{{$data['channel']['title']}}</text>
        </g>
    </g>


    <g data-testid="main-card-body" transform="translate(0, 55)">
        <svg x="0" y="0">
            @php $t = 0;$d=450; @endphp
            @foreach ($data['channel']['item'] as $item)
            <g transform="translate(0, {{$t}})">
                <g class="stagger" style="animation-delay: {{$d}}ms" transform="translate(25, 0)">

                    <svg data-testid="icon" class="icon" viewBox="0 0 16 16" version="1.1" width="16" height="16">
                        <path fill-rule="evenodd"
                            d="M8 .25a.75.75 0 01.673.418l1.882 3.815 4.21.612a.75.75 0 01.416 1.279l-3.046 2.97.719 4.192a.75.75 0 01-1.088.791L8 12.347l-3.766 1.98a.75.75 0 01-1.088-.79l.72-4.194L.818 6.374a.75.75 0 01.416-1.28l4.21-.611L7.327.668A.75.75 0 018 .25zm0 2.445L6.615 5.5a.75.75 0 01-.564.41l-3.097.45 2.24 2.184a.75.75 0 01.216.664l-.528 3.084 2.769-1.456a.75.75 0 01.698 0l2.77 1.456-.53-3.084a.75.75 0 01.216-.664l2.24-2.183-3.096-.45a.75.75 0 01-.564-.41L8 2.694v.001z" />
                    </svg>

                    <text class="stat bold" x="25" y="12.5">{{ $item['title'] }}</text>
                </g>
            </g>
            @php $t += 25;$d += 150; @endphp
            @endforeach
        </svg>

    </g>
</svg>
