---
category_name: hard
problem_code: TWOCOMP
problem_name: 'Two Companies'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: shiplu
date_added: 15-04-2014
tags:
    - hard
    - june14
    - max
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/TWOCOMP'
time:
    view_start_date: 1402911000
    submit_start_date: 1402911000
    visible_start_date: 1402911000
    end_date: 1735669800
    current: 1493556888
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/JUNE14/mandarin/TWOCOMP1.pdf) and [Russian](http://www.codechef.com/download/translated/JUNE14/russian/TWOCOMP.pdf).

The tram service will start its' work soon in Bytetown - the capital of Byteland. There are **N** junctions in Bytetown and **N-1** tram ways between them. Every tram way connects some two distinct junctions. It's possible to go from any junction to any other one using a sequence of tram ways and there is only one way to go from one junction to another one. So, we can conclude that the graph consisting of junctions as vertices and tram ways as edges is a tree.

What has not been decided yet is the set of tram routes. Two companies - BytelandTramService (BTS) and GlobalTramNetworks (GTN) have proposed their own plans of tram routes. Each plan has a number of routes and for every route it has a starting junction, a final junction and the amount of joy that one will get by using this route (that was figured out by the BTS and the GTN analysts).

The problem is that these two companies don't cooperate. So, if there's at least one junction that's present at the same time, in the route of BTS and of GTN, there is a risk of collision.

The final decision was to choose some subset of the set of BTS's routes and some subset of GTN's routes in such a way that no two routes from the BTS's subset and from the GTN's subset intersect. But BTS's chosen routes can intersect with each other and GTN's chosen routes can intersect with each other. Please, find the maximal possible sum of amounts of joy of the chosen routes.

### Input

The first line of input consists of three space separated integers - **N**, **M1** and **M2** - the number of junctions, the number of routes in BTS' plan and the number of routes in GTN's plan.

The next **N-1** lines of input describe tram ways. Each tram way is described by two space separated integers - **Xi** and **Yi** with the meaning that the junctions with the numbers **Xi** and **Yi** are connected with a tram way.

Then there are **M1** lines, describing the
route plan of BTS. Each line consists of three integers: **Bxi**, **Byi** and **Bji** - the starting junction, the final junction and the amount of joy that one will get using this route respectively.

Then there are **M2** lines, describing the route plan of GTN. Each line consists of three integers: **Gxi**, **Gyi** and **Gji** - the starting junction, the final junction and the amount of joy that one will get using this route respectively.

### Output

Output the maximal possible sum of amounts of joy over all the chosen roads.

### Constraints

- 1 ≤ **N** ≤ 105
- 1 ≤ **M1**, **M2** ≤ 700
- 1 ≤ **Xi**, **Yi** ≤ **N**
- 1 ≤ **Bxi**, **Byi**, **Gxi**, **Gyi** ≤ **N**
- 1 ≤ **Bji**, **Gji** ≤ 106

### Example

<pre><b>Input:</b>
5 2 1
1 2
2 3
3 4
4 5
1 3 7
2 5 18
2 5 11

<b>Output:</b>
25
</pre>
### Explanation

If you take the only route of GTN, you'll not be able to take anything of BTS. So, it's better to take the both routes of BTS (a route of a company can cross with another route of this company as well) and to end up with the total sum of 25.
