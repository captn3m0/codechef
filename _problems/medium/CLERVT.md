---
category_name: medium
problem_code: CLERVT
problem_name: 'The Kingdom of Ererraveth'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
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
    - CLOJ
    - COB
    - FS
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: meooow
problem_tester: null
date_added: 4-04-2018
tags:
    - cole2018
    - dp
    - dynamic
    - euler
    - medium
    - meooow
editorial_url: 'https://discuss.codechef.com/problems/CLERVT'
time:
    view_start_date: 1524062940
    submit_start_date: 1524062940
    visible_start_date: 1524062940
    end_date: 1735669800
    current: 1525198950
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available. The kingdom of Ererraveth has $N$ cities and $N - 1$ roads. A single road connects 2 cities. From any city it is possible to reach all other cities via the roads. It can be deduced that there is a unique path between any 2 cities. Each city is labeled with a unique number $1$ to $N$. The city where the royal palace is located is assigned number $1$. The evil prince Drach who was once banished is planning to return and claim the empire for himself. First, he will capture the royal palace. Next, he will have his revenge on the lords of the cities. To punish a city, he will simply destroy all roads that connect it to its neighbouring cities, and the city will slowly starve. However, there are $K$ cities whose lords have supported Drach in the past. Let's call these \*\*good cities\*\*. Drach will ensure that all good cities remain connected via roads to his royal palace. Thus any city which is not good but lies on the path from the royal palace to a good city will be spared. But if the lord of any good city is removed from his post by the time Drach is back, he will no longer consider it a good city. Let $G$ be the set of potentially good cities with $|G|=K$, and $G'$ be a subset of $G$. Drach wants to know the number of roads he will have to destroy if $G'$ be the set of good cities, i.e. if all cities in $G'$ remain connected to his palace in city $1$ and all cities that are not essential for the above are punished. You will need to calculate the bitwise XOR-sum of the results for all the $2^K$ possible subsets $G'$. ###Input: - The first line contains $N$, the number of cities. - $N-1$ lines follow. Each line contains two integers $u$ and $v$ denoting that city $u$ and $v$ are connected via a road. - The next line contains $K$, the number of potentially good cities - The next line contains the $K$ potentially good cities $G\_1, G\_2, ... G\_K$. ###Output: - Output in a single line the XOR-sum of the number of roads Drach needs to destroy for each subset $G'$ of $G$ if $G'$ is considered the set of good cities. ###Constraints - $1 \\leq N \\leq 10^5$ - $1 \\leq K \\leq \\min(27, N - 1)$ - $2 \\leq G\_i \\leq N$ - All $G\_i$ are distinct ###Sample Input: 7 1 2 1 3 1 4 2 5 3 6 3 7 2 2 7 ###Sample Output: 4 ###Explanation: !\[kingdom\](https://s3.amazonaws.com/codechef\_shared/upfiles/kingdom\_Gmf0xbi.png) For $G' = \\{\\}$, $6$ roads need to be destroyed. For $G' = \\{2\\}$, $5$ roads need to be destroyed. For $G'= \\{7\\}$, $4$ roads need to be destroyed. For $G' = \\{2, 7\\}$, $3$ roads need to be destroyed. So the answer is $6 \\oplus 5 \\oplus 4 \\oplus 3 = 4$.
