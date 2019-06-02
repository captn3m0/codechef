---
category_name: medium
problem_code: RAFFLE
problem_name: 'Chef Raffle'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.6'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - PYP3
    - CLOJ
    - COB
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: pieguy
problem_tester: null
date_added: 28-01-2019
tags:
    - calculus
    - hard
    - lagrange
    - pieguy
    - probability
    - snckfl19
editorial_url: 'https://discuss.codechef.com/problems/RAFFLE'
time:
    view_start_date: 1550311200
    submit_start_date: 1550311200
    visible_start_date: 1550311200
    end_date: 1735669800
    current: 1559472981
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/SNCKFL19/hindi/RAFFLE.pdf), \[Bengali\](http://www.codechef.com/download/translated/SNCKFL19/bengali/RAFFLE.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/SNCKFL19/mandarin/RAFFLE.pdf), \[Russian\](http://www.codechef.com/download/translated/SNCKFL19/russian/RAFFLE.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/SNCKFL19/vietnamese/RAFFLE.pdf) as well. Every year, chefs from around the world travel to the Chef Equipment Show to see all the new cooking gizmos and gadgets that will become available for purchase in the upcoming year. The event includes a giveaway called Chef Raffle where chefs can win some of this equipment as prizes. There are $K$ chefs at the event and each of them is given a single raffle ticket. In the Chef Raffle, there are $N$ available prizes (numbered $1$ through $N$) and $N$ corresponding prize boxes. During the event, each chef should choose one of the boxes and place the raffle ticket into it. These choices must be done independently, i.e. the chefs have no information about each other's exact choices. At the end of the event, from each prize box, one ticket is drawn uniformly randomly and the owner of that ticket wins the corresponding prize (if there are no tickets in that prize box, no one wins the corresponding prize). Head Chef is one of the chefs participating in the Raffle. He knows the exact values of all the prizes, so he wants to maximise the potential value of his raffle ticket. After some thinking, he realised that he needs a probabilistic strategy. Specifically, he wants to decide on some probabilities $p\_1, p\_2, \\ldots, p\_N$ (such that $p\_i \\ge 0$ for each valid $i$ and $p\_1 + p\_2 + \\ldots + p\_N = 1$); during the event, he will use this probability distribution to choose the box to place his raffle ticket into, i.e. for each valid $i$, the $i$-th prize box is chosen with probability $p\_i$. Knowing that great chefs think alike, Head Chef assumes that all other chefs will follow the exact same strategy, with the same probabilities (however, the boxes they choose may be different). At the end of the Raffle, let's define Head Chef's \*winnings\* as the value of the prize he won, or $0$ if he did not win any prize (note that it is impossible to win more than one prize). The value of Head Chef's raffle ticket is the expected value of Head Chef's winnings. Determine the maximum possible value of Head Chef's raffle ticket, i.e. the value of the ticket when he decides the probabilities $p\_1, p\_2, \\ldots, p\_N$ optimally. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $N$ and $K$. - The second line contains $N$ space-separated integers $V\_1, V\_2, \\ldots, V\_N$ denoting the values of the prizes. ### Output For each test case, print a single line containing one real number — the maximum value of Head Chef's raffle ticket. Your answer will be considered correct if its absolute or relative error does not exceed $10^{-6}$. ### Constraints - $1 \\le T \\le 1,000$ - $1 \\le N \\le 10^5$ - $1 \\le K \\le 10^6$ - $1 \\le V\_i \\le 10^9$ for each valid $i$ - the sum of $N$ over all test cases does not exceed $2 \\cdot 10^5$ ### Example Input ``` 2 3 2 10 15 18 5 35 21 18 24 26 21 ``` ### Example Output ``` 12.5 3.1415926 ``` ### Explanation \*\*Example case 1:\*\* Head Chef should choose $p\_1 = 0.1$, $p\_2 = 0.4$ and $p\_3 = 0.5$. The probability that he wins the first prize is $0.095$ ($9.5 \\%$); for the second prize, it is $0.32$ and for the third prize, $0.375$. The resulting value of the ticket is $0.095 \\cdot 10 + 0.32 \\cdot 15 + 0.375 \\cdot 18 = 12.5$.
