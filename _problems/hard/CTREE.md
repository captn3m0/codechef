---
category_name: hard
problem_code: CTREE
problem_name: 'Chef and Chefcoin'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: wwwwodddd
date_added: 3-02-2018
tags:
    - cook91
    - data
    - dfs
    - graph
    - hard
    - mgch
    - tree
editorial_url: 'https://discuss.codechef.com/problems/CTREE'
time:
    view_start_date: 1518978600
    submit_start_date: 1518978600
    visible_start_date: 1518978600
    end_date: 1735669800
    current: 1525454405
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK91/mandarin/CTREE.pdf), [Russian](http://www.codechef.com/download/translated/COOK91/russian/CTREE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK91/vietnamese/CTREE.pdf) as well.

Everybody's heard about Chefland — the digital country where dreams come true, where nobody hears about crime and where everyone can get Accepted without submitting solutions. Of course, Chefland has the shape of a [tree](https://en.wikipedia.org/wiki/Tree_(graph_theory)) — there are **N** servers and **N-1** bidirectional channels connecting pairs of servers in such a way that there is exactly one path between each pair of servers.

The citizens in Chefland are living online; each citizen lives on exactly one server at any point in time. Don't be surprised, it's a futuristic scenario! Each channel connecting two servers has a value called _ping_. Each citizen can move to a different server through channels; moving through a channel with ping **2w** takes **w** nanoseconds. Initially, there are **ci** citizens living on the **i**-th server (for each 1 ≤ **i** ≤ **N**).

Recently, Chef has created an [ICO](https://en.wikipedia.org/wiki/Initial_coin_offering) for Chefcoin — the cryptocurrency of the future in Chefland. Everyone in Chefland should receive exactly 1 Chefcoin. How to organize this process? Chefcoins can only be received on certain servers containing cryptoexchanges. Unfortunately, Chef can only create cryptoexchanges on two servers, since they consume a lot of electric power. The citizens want to receive Chefcoin as fast as possible; therefore, each citizen chooses the closest server with a cryptoexchange and moves to that server. Receiving Chefcoin at a cryptoexchange takes zero time.

Chef wants to minimize the sum of the times each citizen needs to spend moving to receive Chefcoin. The two servers containing cryptoexchanges can be chosen arbitrarily. Compute the minimum total time it takes Chefland's citizens to receive Chefcoin!

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains a single integer **N**.
- The second line contains **N** space-separated integers **c1, c2, ..., cN**.
- **N-1** lines follow. Each of these lines contains three space-separated integers **u**, **v** and **w** denoting a channel with ping **2w** nanoseconds connecting servers **u** and **v**.

### Output

For each test case, print a single line containing one integer — the minimal sum of times it takes each citizen to receive Chefcoin if the two cryptoexchanges are placed optimally.

### Constraints

- 2 ≤ **N** ≤ 50000
- 1 ≤ **ci** ≤ 50000 for each valid **i**
- 1 ≤ **w** ≤ 50000
- 1 ≤ **u**, **v** ≤ **N**
- the channels describe a tree
- 1 ≤ sum of **N** over all test cases ≤ 250000

### Example

<pre><b>Input:</b>

2
4
10 25 15 40
1 2 1
2 3 3
1 4 4
7
24786 24640 17641 19735 8667 15790 5948
3 7 17108
7 6 4875
7 1 9317
1 2 8597
3 4 28200
1 5 22026

<b>Output:</b>

55
1148402043
</pre>### Explanation

**Example case 1:** Chef can create cryptoexchanges on servers 2 and 4. Citizens on these servers receive Chefcoins immediately. The total time for Chefland's remaining citizens is the time it takes 15 citizens to move from server 3 to server 2 (3 · 15 = 45) plus the time it takes 10 citizens to move from server 1 to server 2 (1 · 10 = 10), so the optimal total time is 55.
