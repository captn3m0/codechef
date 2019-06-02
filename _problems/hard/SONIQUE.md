---
category_name: hard
problem_code: SONIQUE
problem_name: 'Sonya and Queries'
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
    - R
    - COB
    - FS
max_timelimit: '2.5'
source_sizelimit: '50000'
problem_author: smelskiy
problem_tester: null
date_added: 3-04-2019
tags:
    - smelskiy
time:
    view_start_date: 1555320602
    submit_start_date: 1555320602
    visible_start_date: 1555320602
    end_date: 1735669800
    current: 1559472994
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/APRIL19/hindi/SONIQUE.pdf) and \[Bengali\](http://www.codechef.com/download/translated/APRIL19/bengali/SONIQUE.pdf) \*\*This is an interactive problem.\*\* Sonya is a very creative and dreamy person, so she decided to open her own bakery one day. Since Sonya lives in a country where the traditional dish is apple pie, the business quickly became successful, and after a while, Sonya already had a chain of $N$ bakeries — one in each of the $N$ cities of the country. The cities are numbered $1$ through $N$ and the bakeries are numbered in the same way as the cities. At each moment, each bakery has a certain number of pies in stock; let's denote the number of pies in stock in city $i$ by $A\_i$. All the bakeries bake unique pies, so the country has built $N-1$ roads in such a way that it is possible to reach any city from all other cities using these roads (and possibly visiting other cities on the way). The roads are numbered $1$ through $N-1$. Unfortunately, in the country where Sonya lives, earthquakes happen frequently, so roads can collapse. It is impossible to use a collapsed road until it is repaired. For each bakery, let's define its connected component as the set of all bakeries (including itself) which can be reached from it without using any collapsed roads. You should process $M$ events. There are seven types of events, each of them corresponds to something changing in the country or Sonya asking for information related to her business: - type $1$: The state of the $E$-th road changes — if it was not collapsed, it collapses, and if it was collapsed, it is repaired (and becomes not collapsed). - type $2$: The $X$-th bakery bakes and delivers $Y$ pies to each bakery in its connected component (including itself). In other words, for each bakery $i$ in the connected component of bakery $X$, $A\_i$ increases by $Y$. - type $3$: Each bakery from the connected component of the $X$-th bakery sends all the pies it has in stock to the $X$-th bakery, which adds them to its stock. - type $4$: Sonya wants to know the number of pies in stock in the $X$-th bakery. - type $5$: Sonya wants to know the total number of pies in stock in the connected component of the $X$-th bakery. - type $6$: Each bakery from the connected component of the $X$-th bakery (including itself) sells all the pies it had in stock. In other words, for each bakery $i$ in the connected component of bakery $X$, $A\_i$ becomes $0$. - type $7$: Sonya wants to know the minimum number of roads which need to be repaired so that for each pair of bakeries $i$ and $j$ such that $A\_i \\gt 0$ and $A\_j \\gt 0$, it is possible to reach bakery $i$ from bakery $j$ without using any collapsed roads. You need to answer all of Sonya's queries (for events of types $4$, $5$ and $7$). The queries need to be answered online, i.e. you must answer each query in order to receive information about the subsequent events from the grader. ### Interaction - First, you must read a line containing a single integer $G$ — the number of the current subtask. - Then, you must read a line containing two space-separated integers $N$ and $M$. - Then, you must read $N - 1$ lines. For each $i$ ($1 \\le i \\le N-1$), the $i$-th of these lines contains two space-separated integers $u$ and $v$ denoting the cities connected by the $i$-th road. - Then, you must read a line containing a single string with length $N - 1$. For each valid $i$, the $i$-th character of this string is '1' if the $i$-th road is initially collapsed or '0' if it is not collapsed. - Then, you must read a line containing $N$ space-separated integers $A\_1, A\_2, \\ldots, A\_N$ — the number of pies in stock initially. - Finally, you must repeat the following process $M$ times: - Read a line describing an event. This line begins with an integer denoting the type of the event. - For queries of type $1$, this integer is followed by a space and a single integer $E$. - For queries of type $2$, it is followed by a space and two space-separated integers $X$ and $Y$. - For queries of types $3$ through $6$, it is followed by a space and a single integer $X$. - For queries of type $7$, it is not followed by anything else. - If the type of the event was $4$, $5$ or $7$, print a single line containing one integer — the answer to this query. Don't forget to flush the output after printing each line! ### Constraints - $1 \\le G \\le 5$ - $1 \\le N, M \\le 250,000$ - $1 \\le u, v \\le N$ - $0 \\le A\_i \\le 10^5$ for each valid $i$ - $1 \\le E \\le N-1$ - $1 \\le X \\le N$ - $0 \\le Y \\le 10^5$ ### Subtasks \*\*Subtask #1 (10 points):\*\* $1 \\le N, M \\le 3,000$ \*\*Subtask #2 (20 points):\*\* - there are no queries of type $7$ - in each event of type $1$, a road that was collapsed is repaired \*\*Subtask #3 (25 points):\*\* there are no queries of type $7$ \*\*Subtask #4 (15 points):\*\* each city is directly connected to at most two other cities (by collapsed or uncollapsed roads) \*\*Subtask #5 (30 points):\*\* original constraints ### Example Input ``` 5 5 11 1 2 1 3 3 4 3 5 0100 1 0 6 1 3 5 3 3 4 2 5 4 4 3 7 6 4 1 2 5 4 2 2 1 1 3 5 2 ``` ### Example Output ``` 10 4 1 1 5 ``` ### Explanation The following images depict the initial state of the country (Image 0) and after each event that changes the state of the country (Image 1 through Image 6, in chronological order). Bakeries/cities are depicted as circles, uncollapsed roads as regular lines between them and collapsed roads as dashed lines. Inside each circle, there are two integers — the number of the city/bakery and the number of pies it has in stock. !\[\](https://codechef\_shared.s3.amazonaws.com/download/Images/APRIL19/SONIQUE/image0.png =190x275) !\[\](https://codechef\_shared.s3.amazonaws.com/download/Images/APRIL19/SONIQUE/image123.png =500x275) !\[\](https://codechef\_shared.s3.amazonaws.com/download/Images/APRIL19/SONIQUE/image456.png =500x275)
