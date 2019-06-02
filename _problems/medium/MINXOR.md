---
category_name: medium
problem_code: MINXOR
problem_name: 'XOR Minimization'
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
max_timelimit: '7'
source_sizelimit: '50000'
problem_author: kostya_by
problem_tester: gerald
date_added: 8-02-2014
tags:
    - cook44
    - decomposition
    - kostya_by
    - medium
    - sqrt
    - trie
editorial_url: 'http://discuss.codechef.com/problems/MINXOR'
time:
    view_start_date: 1395599400
    submit_start_date: 1395599400
    visible_start_date: 1395599400
    end_date: 1735669800
    current: 1493557800
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK44/mandarin/MINXOR.pdf) and [Russian](http://www.codechef.com/download/translated/COOK44/russian/MINXOR.pdf) as well.

You are given an array **A** consisting of **N** non-negative integers. The elements of array **A** are indexed with integers 1, 2, 3, ..., **N**. You need to implement a data structure, which can process the following queries efficiently:

- 1 **L** **R**: find the minimal number in the subarray **A\[L..R\]** and count how many times it appears there;
- 2 **L** **R** **K**: replace each number **Ai** with the expression (**Ai** xor **K**) for the subarray **A\[L..R\]**.

You can read about XOR-operation here: [http://en.wikipedia.org/wiki/Exclusive\_or](http://en.wikipedia.org/wiki/Exclusive_or)

### Input

The first line of the input contains two integers **N** and **Q**, denoting the size of **A** and the number of the queries to process. The second line contains **N** non-negative integers, denoting array **A**.

The next **Q** lines contain the queries to process, each contains one query. The format of queries is the same with the one described in the legend.

### Output

Your output should contain exactly **Q1** lines, where **Q1** is the number of the queries of the first type in the input.

For each query of the first type you need to output two numbers: the minimal number in the subarray **A\[L..R\]** and the number of times it appears there. You should output the answers for the queries in the order they appear in the input.

### Constraints

- 1 ≤ **N** ≤ 250 000;
- The number of the queries of the first type won't exceed 40000;
- The number of the queries of the second type won't exceed 10000;
- 0 ≤ **Ai** < 65536;
- 0 ≤ **K** < 65536, for each query of the second type appeared in the input;
- 1 ≤ **L** ≤ **R** ≤ **N**, for each query appeared in the input.

### Example

<pre><b>Input:</b>
5 3 
0 1 0 1 0 
1 1 5 
2 1 5 1 
1 1 5

<b>Output:</b>
0 3 
0 2
</pre>
### Explanation

Initially **A\[\]** = {0, 1, 0, 1, 0}.

After the second query **A\[\]** = {1, 0, 1, 0, 1}.
