---
category_name: easy
problem_code: CHEFLR
problem_name: 'Chef and Left-Right'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: berezin
problem_tester: xcwgf666
date_added: 26-03-2014
tags:
    - ad
    - basic
    - berezin
    - sept14
    - simple
editorial_url: 'http://discuss.codechef.com/problems/CHEFLR'
time:
    view_start_date: 1410773400
    submit_start_date: 1410773400
    visible_start_date: 1410773400
    end_date: 1735669800
    current: 1493558120
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/SEPT14/mandarin/CHEFLR.pdf) and [Russian](http://www.codechef.com/download/translated/SEPT14/russian/CHEFLR.pdf).

Chef has a nice *complete* binary tree in his garden. *Complete* means that each node has **exactly two** sons, so the tree is infinite. Yesterday he had enumerated the nodes of the tree in such a way:

- Let's call the nodes' level a number of nodes that occur on the way to this node from the root, including this node. This way, only the root has the level equal to **1**, while only its two sons has the level equal to **2**.
- Then, let's take all the nodes with the odd level and enumerate them with consecutive odd numbers, starting from the smallest levels and the leftmost nodes, going to the rightmost nodes and the highest levels.
- Then, let's take all the nodes with the even level and enumerate them with consecutive even numbers, starting from the smallest levels and the leftmost nodes, going to the rightmost nodes and the highest levels.
- For the better understanding there is an example:

<pre>
                             1
                        /           \
                  2                   4
                /   \                /       \
             3       5           7        9
            / \      /  \          /  \       /  \
           6  8 10 12      14 16   18 20 
</pre>
Here you can see the visualization of the process. For example, in odd levels, the root was enumerated first, then, there were enumerated roots' left sons' sons and roots' right sons' sons.

You are given the string of symbols, let's call it **S**. Each symbol is either **l** or **r**. Naturally, this sequence denotes some path from the root, where **l** means going to the left son and **r** means going to the right son.

Please, help Chef to determine the number of the last node in this path.

### Input

The first line contains single integer **T** number of test cases.

Each of next **T** lines contain a string **S** consisting only of the symbols **l** and **r**.

### Output

Per each line output the number of the last node in the path, described by S, modulo **109+7**.

### Constraints

- **1** ≤ **|T|** ≤ **5**
- **1** ≤ **|S|** ≤ **10^5**
- Remember that the tree is infinite, so each path described by appropriate **S** is a correct one.

### Example

<pre><b>Input:</b>
4
lrl
rll
r
lllr
<b>Output:</b>
10
14
4
13

</pre>
### Explanation

See the example in the statement for better understanding the samples.
