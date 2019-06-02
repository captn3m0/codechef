---
category_name: hard
problem_code: RIVERLND
problem_name: Riverland
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: forestryks
problem_tester: null
date_added: 8-02-2019
tags:
    - forestryks
time:
    view_start_date: 1550311200
    submit_start_date: 1550311200
    visible_start_date: 1550311200
    end_date: 1735669800
    current: 1559472992
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/SNCKFL19/hindi/RIVERLND.pdf), \[Bengali\](http://www.codechef.com/download/translated/SNCKFL19/bengali/RIVERLND.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/SNCKFL19/mandarin/RIVERLND.pdf), \[Russian\](http://www.codechef.com/download/translated/SNCKFL19/russian/RIVERLND.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/SNCKFL19/vietnamese/RIVERLND.pdf) as well. There is a country with a large river system. The cities in this country are numbered $1$ through $N$; city number $1$ is the capital. The river system forms a rooted tree such that the capital is the root. Each river connects two cities and flows towards the root. For each non-root city $i$, there is a river that flows from this city to city $p\_i$. There is also a port in each city. In the country, there are only two ways to travel between cities: by boat and by ferry. A boat can only move downstream (that is, towards the capital), while a ferry can move in both directions. There are direct ferry routes from every port to every other port. Initially, all the ports are open. Sometimes, some ports can close or open again (possibly multiple times); the port in the capital is always open. It is not allowed to travel by ferry from a closed port, but travelling to a closed port is allowed. Travelling by boat is always possible, even from a closed port. Sometimes, Chef wants to go on a trip. He has already chosen a city $v$ where he will start the trip. However, he only has enough money for at most one trip by ferry. Therefore, he wants to make a trip as follows: - Choose a city $b$ with an opened port and travel to this city by boat. It must be possible to travel from $v$ to $b$ by boat (specifically, $v=b$ is allowed). - Decide to either continue from city $b$ by ferry or end the trip in this city. - If he decides to continue by ferry, choose a city $f$ and travel from $b$ to $f$ by ferry. It must also be possible to travel from $b$ to $f$ by ferry. - It is not allowed to travel along any river twice (regardless of direction), i.e. when Chef decides to continue by ferry, the shortest paths between ($v$, $b$) and ($b$, $f$) must have no common rivers. Chef likes travelling by ferry, so the more rivers he visits (travels along) on a ferry, the happier he becomes. Also, each city has a fixed beauty; let's denote the beauty of city $i$ by $a\_i$. Then, for a trip with \*value\* $T$, let's define the \*happiness\* Chef gains as $a\_b + D \\cdot T$, where $D$ is the length of the ferry route (the number of rivers visited when travelling by ferry — possibly zero). You should process $Q$ queries. There are three types of queries: - `- v`: The port in city $v$ closes. It is guaranteed that the port in city $v$ was open before this query. - `+ v`: The port in city $v$ reopens. It is guaranteed that the port in city $v$ was closed before this query. - `? v T`: Chef wants to make a trip with value $T$ from city $v$. For each query of the third type, find the maximum happiness Chef can gain from such a trip. ### Input - The first line of the input contains two space-separated integers $N$ and $Q$. - The second line contains $N-1$ space-separated integers $p\_2, p\_3, \\ldots, p\_N$. - The third line contains $N$ space-separated integers $a\_1, a\_2, \\ldots, a\_N$. - The following $Q$ lines describe queries. Each of these lines starts with a character $c$ denoting the type of the current query, a space and an integer $v$. If $c$ is '?', this is followed by a space and an integer $T$. ### Output For each query of the third type, print a single line containing one integer — the maximum obtainable happiness. ### Constraints - $2 \\le N \\le 3 \\cdot 10^5$ - $1 \\le Q \\le 3 \\cdot 10^5$ - $1 \\le p\_i \\lt i$ for each valid $i$ - $1 \\le a\_i \\le 10^9$ for each valid $i$ - $1 \\le v \\le N$ - for each query of the first or second type, $v \\neq 1$ - $1 \\le T \\le 10^9$ - $c \\in \\{\\text{'+'}, \\text{'-'}, \\text{'?'}\\}$ ### Example Input ``` 10 9 1 2 3 2 2 6 3 8 8 30 20 6 13 8 40 7 9 13 1 ? 4 11 - 4 ? 4 11 - 7 ? 10 6 + 7 - 6 - 2 ? 7 4 ``` ### Example Output ``` 57 42 33 30 ``` ### Explanation In the first query, Chef travels by ferry from city $4$ to city $7$. In the second query, Chef cannot travel by ferry from city $4$, so he has to use the second best route, which is from city $2$ to city $7$. In the third query, Chef travels to city $8$ by boat and then to city $7$ by ferry. In the fourth query, Chef travels to the capital (city number $1$) by boat and does not travel by ferry at all.
