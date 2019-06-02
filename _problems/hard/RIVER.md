---
category_name: hard
problem_code: RIVER
problem_name: 'Chef at the River'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: bciobanu
problem_tester: null
date_added: 26-07-2018
tags:
    - aug18
    - bciobanu
    - bciobanu
    - hard
    - likecs
    - link
    - matrix
    - tropical
editorial_url: 'https://discuss.codechef.com/problems/RIVER'
time:
    view_start_date: 1534152605
    submit_start_date: 1534152605
    visible_start_date: 1534152605
    end_date: 1735669800
    current: 1559472992
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Hindi,](http://www.codechef.com/download/translated/AUG18/hindi/RIVER.pdf)[Mandarin chinese](http://www.codechef.com/download/translated/AUG18/mandarin/RIVER.pdf), [Russian](http://www.codechef.com/download/translated/AUG18/russian/RIVER.pdf) and [Vietnamese](http://www.codechef.com/download/translated/AUG18/vietnamese/RIVER.pdf) as well.

Chef and $N$ animals (numbered $1$ through $N$) must cross a river. They are all currently located at the left bank; Chef wants all animals and himself to be located at the right bank at the end. Some of the animals do not get along with each other, so they must not be left unattended by Chef at the same bank at any point in time. These restrictions are described by a tree with $N$ vertices; an edge between vertices $u$ and $v$ denotes that animals $u$ and $v$ do not get along with each other. There is just a single boat with which Chef and the animals can cross the river. When the boat is crossing the river, Chef must be in the boat to steer it, possibly with zero or more animals; meanwhile, all animals that are not in the boat are left unattended. The \*capacity\* of the boat is the maximum number of animals that can fit into the boat when crossing the river, plus 1 (for Chef). Initially, the tree consists only of vertex $1$ (the root); the vertices $2, 3, \\dots, N$ are added to the tree one by one in this order. Whenever a vertex is added, it is connected to exactly one of the vertices already present in the tree (its parent). After adding each vertex, you should compute the minimum required capacity of the boat such that it is possible for Chef and the animals to move to the right bank of the river. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains $N - 1$ space-separated integers $p\_2, p\_3, \\dots, p\_N$, where $p\_i$ denotes the parent of vertex $i$. ### Output Print a single line containing $N-1$ space-separated integers; for each $i$ ($1 \\le i \\le N-1$), the $i$-th of these integers should denote the minimum capacity of the boat after adding vertex $i+1$. ###Constraints - $1 \\le T \\le 2 \\cdot 10^5$ - $2 \\le N \\le 10^6$ - $1 \\le p\_i \\lt i$ for each valid $i$ - the sum of $N$ for all test cases does not exceed $10^6$ ###Subtasks \*\*Subtask #1 (29 points):\*\* the sum of $N$ for all test cases does not exceed $1,000$ \*\*Subtask #2 (12 points):\*\* the \[diameter\](https://en.wikipedia.org/wiki/Distance\_(graph\_theory)) of the tree is less than $40$ \*\*Subtask #3 (33 points):\*\* the sum of $N$ for all test cases does not exceed $2 \\cdot 10^5$ \*\*Subtask #4 (26 points):\*\* original constraints ### Example Input ``` 1 7 1 1 2 2 3 5 ``` ### Example Output ``` 2 2 3 3 3 4 ``` ### Explanation After vertex $2$ is added, we have two animals which do not get along with each other. If the boat has capacity $2$, Chef can transport one of these animals to the right bank, return to the left bank alone and transport the other animal with him to the right bank too. After vertex $3$ is added, we have three animals; neither of animals $2$ and $3$ can be left at a riverbank with animal $1$. The boat needs to have capacity at least $2$. With capacity $2$, one possible strategy for Chef is as follows: First, transport animal $1$ to the right bank and leave it there. Then, go back to the left bank, pick up animal $3$ and transport it to the right bank; take animal $1$ from the right bank, bring it to the left bank, take animal $2$ from the left bank and bring it to the right bank. Finally, pick up animal $1$ from the left bank and bring it to the right bank, so at the end, Chef and all animals are at the right bank. After vertex $4$ is added, the boat needs to have capacity at least $3$. One possible strategy is as follows: transport animals $2$ and $3$ to the right bank, return to the left bank and transport animals $1$ and $4$ to the right bank as well.
