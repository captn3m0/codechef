---
category_name: medium
problem_code: ANDGRAPH
problem_name: 'AND Graph'
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
    - 'CPP 6.3'
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
    - PYPY
    - PYTH
    - 'PYTH 3.5'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: alex_2oo8
problem_tester: null
date_added: 17-06-2017
tags:
    - alex_2oo8
time:
    view_start_date: 1498908900
    submit_start_date: 1498908900
    visible_start_date: 1498908900
    end_date: 1735669800
    current: 1514816321
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKFL17/mandarin/ANDGRAPH.pdf), [Russian](http://www.codechef.com/download/translated/SNCKFL17/russian/ANDGRAPH.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKFL17/vietnamese/ANDGRAPH.pdf) as well.

Chef has a huge directed graph **G** which has a vertex for every non-negative integer. The edges of the graph follow a strict pattern: there is a directed edge from vertex **u** to vertex **v** if and only if both the following two conditions are satisfied:

- **u** v
- (**u** AND **v**) = 0, where AND is bitwise AND which is defined below.


Now Chef got curious as to how many different paths there are in graph **G** from vertex **s** to vertex **t**. He has a total of **T** questions of the above form for you. As the exact numbers of paths may be extremely large, print the answers modulo 998244353.

**Note**: A bitwise AND takes two equal-length binary representations and performs the logical AND operation on each pair of the corresponding bits, by multiplying them. Thus, if both bits in the compared position are 1, the bit in the resulting binary representation is 1 (1 × 1 = 1); otherwise, the result is 0 (1 × 0 = 0 and 0 × 0 = 0). For example, 3 AND 5 = (011)2 AND (101)2 = (001)2 = 1

### Input

The first line of the input contains an integer **T** denoting the number of test cases. 
Each test case consists of two lines containing binary strings **s2** and **t2** that are binary representations of numbers **s** and **t** respectively. ### Output

For each test case, output a single line containing one integer ― the number of different paths from **s** to **t** modulo 998244353. ### Constraints

- 1 ≤ **|s2|** = **|t2|** ≤ 4 000
- 1 ≤ \[sum of **|s2|** over all **T** test cases\] ≤ 10 000
- **s** t
- **t2** contains no leading zeroes, while **s2** can contain some

### Example

<pre><b>Input:</b>
3
01
10
01
11
001
100

<b>Output:</b>
1
0
2
</pre>### Explanation

**Example case 1:** There is a direct edge from vertex 1 to vertex 2 and this is the only path between these two vertices. **Example case 2:** Vertex 3 contains only one incoming edge in graph **G** and this edge is from vertex 0, but as there are no path from vertex 1 to vertex 0, thus there are no paths to vertex 3 as well. **Example case 3:** The two paths are: 1 → 2 → 4 and 1 → 4.
