---
category_name: hard
problem_code: RRTREE2
problem_name: 'Tree Again'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: Rubanenko
problem_tester: shiplu
date_added: 12-07-2014
tags:
    - Rubanenko
    - cook48
    - dfs
    - knapsack
    - medium
editorial_url: 'http://discuss.codechef.com/problems/RRTREE2'
time:
    view_start_date: 1405884600
    submit_start_date: 1405884600
    visible_start_date: 1405884600
    end_date: 1735669800
    current: 1493556824
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK48/mandarin2/RRTREE2.pdf) and [Russian](http://www.codechef.com/download/translated/COOK48/russian/RRTREE2.pdf) as well.

Misha likes playing DotA and he would do nothing else but play it if he could. Unfortunately for Misha, real life is rough and he has to solve following problem before spending a day playing. 
You are given a rooted tree with **N** vertices. Vertices are numerated from **1** to **N** and vertex **1** is the root of the tree. A positive integer **Wi** is assigned to every node. Consider following code:

<pre>
Integer <b>sum</b> := 0;
Array of boolean marked := {false, false, false, ..., false};
Procedure Dfs(Integer <b>v</b>)
    Begin
        <b>sum</b> := <b>sum</b> + <b>W<sub>v</sub></b>;
        <b>marked[sum]</b> := true;
        For each node <b>u</b> that <b>v</b> is a parent of <b>u</b> do
            Begin
                Dfs(<b>u</b>);
            End;
    End;


</pre>One can notice that the state of **marked\[\]** array depends on the order vertices **u** processed. You are to check for every integer number **s** from **1** to the sum of **Wi** whether there exists some order of viewing children in **Dfs** that **marked\[s\] = true.** Note that **marked\[\]** and **sum** are global variables and **Dfs(1)** is initially called.

### Input

The first line contains integer **N** — the number of vertices in given tree. **N** integers **Wi** follow in the next line. Then **N-1** lines follow, **ith** of them contains a parent of vertex **i+1**.

### Output

Let **S** be the sum over all **Wi**. You should output S characters **ith** of which should be equal to **1** if it is possible to get **marked\[i\] = true** and  otherwise. Have a look at the example for better understanding.

### Constraints

- **1** ≤ **N** ≤ **500**
- **1** ≤ sum of all **Wi** ≤ **100000**
- **1** ≤ **Wi** ≤ **100000**
- If  **u**  is the parent of vertex **v** then  **u**  < **v**

### Example

<pre><b>Input:</b>
5
1 7 7 2 4
1
1
2
4

<b>Output:</b>
100000010100011010001


</pre>