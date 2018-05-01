---
category_name: medium
problem_code: CHEFGIRL
problem_name: 'Chef and Girls'
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
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
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
date_added: 25-10-2015
tags:
    - berezin
    - dec15
    - directed
    - dynamic
    - graphs
    - medium
editorial_url: 'http://discuss.codechef.com/problems/CHEFGIRL'
time:
    view_start_date: 1450085400
    submit_start_date: 1450085400
    visible_start_date: 1450085400
    end_date: 1735669800
    current: 1493557528
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/DEC15/mandarin/CHEFGIRL.pdf), [Russian](http://www.codechef.com/download/translated/DEC15/russian/CHEFGIRL.pdf) and [Vietnamese](http://www.codechef.com/download/translated/DEC15/vietnamese/CHEFGIRL.pdf) as well.

Chef has a problem - he likes a girl but she has **32** secrets and **N** friends (also girls).

Chef has enumerated each girl from **1** to **N**, Chef's crush has the number **1**.

Now he consider all girls as nodes of a directed graph. If one girl has an edge directed towards another girl, the former tells all the secrets she knows to the latter. Edges are oriented, so if one girl is sharing secrets with another, it doesn't imply the same relation in the reverse direction. Also, there are no cycles in the graph.

Each girl (except Chef's crush) has only one edge emanating from her, or doesn't have any edges emanating from her at all. Each girl listens to at most one girl. In other words, for each girl, there is only one girl who reveals secrets to her, or there are no such girls at all. Each edge has two integers assigned to it, specifying the **range of interest**. If girl **A** knows secrets in the range **\[10-20\]** and an edge directed towards girl **B** with a range of interest **\[2-15\]** then girl **B** will know secrets in the range **\[10-15\]**, which is, evidently, an intersection of the range of secrets and the interest range.

Chef's crush has all the **\[1-32\]** secrets, other girls just listen to her and then gossip around (share those secrets). If a girl doesn't have an edge emanating from her, she tells all the secrets she knows to Chef.

Chef can perform operations of the following kind: take some edge, and extend its range of interest by one (to the left or the right). He wants to know the minimal number of operations he needs to perform in order to collect all the secrets.

### Input

- The first line contains two integers **N** and **M** denoting the number of girls and ribs appropriately.
- Each of next **M** lines describe an edge, and contains four integers — **i**, **j**, **l**, **r** — meaning that there is an oriented edge from **i** to **j** with a range of interest **\[l-r\]**.

### Output

- In a single line, output a single integer: the answer.

### Constraints

- **1** ≤ **N, M** ≤ **10^5**
- **1** ≤  **i** j ≤ **N**
- **1** ≤  **l** ≤  **r** ≤ **32**

### Subtasks

- Subtask **N, M** ≤ **10**. Points: **10**
- Subtask **N, M** ≤ **10^3**. Points: **20**
- Subtask **Original constraints**. Points: **70**

### Example

<pre><b>Input:</b>
5 4
1 2 10 15
1 3 10 16
2 4 1 1
3 5 10 15

<b>Output:</b>
50
</pre><pre>
<h3>Explanation</h3>
<p><b>Example case 1.</b></p>
Without any changes made by Chef, we will have the following knowledge propagation:
Girl <b>1</b> knows <b>[1-32]</b>.
Girl <b>2</b> knows <b>[10-15]</b> (intersection of <b>[1-32]</b> and <b>[10-15]</b>).
Girl <b>3</b> knows <b>[10-16]</b> (intersection of <b>[1-32]</b> and <b>[10-16]</b>).
Girl <b>4</b> knows <b>[]</b> (intersection of <b>[10-15]</b> and <b>[1-1]</b>).
Girl <b>5</b> knows <b>[10-15]</b> (intersection of <b>[10-16]</b> and <b>[10-15]</b>).

So Chef can collect secrets <b>[10-15]</b> only.

Here is the solution:

1. Change <b>1 2 10 15</b> to <b>1 2 1 15</b> (by applying the operation <b>9</b> times).
2. Change <b>2 4 1 1</b> to <b>2 4 1 9</b> (by applying the operation <b>8</b> times).
3. Change <b>1 3 10 16</b> to <b>1 3 10 32</b> (by applying the operation <b>16</b> times).
3. Change <b>3 5 10 15</b> to <b>1 3 10 32</b> (by applying the operation <b>17</b> times).

Now, all secrets in the range <b>[1-9]</b> will go through <b>1-2-4</b> and all secrets in the range <b>[10-32]</b> will go through <b>1-3-5</b>, finally reaching Chef.
And the total cost is <b>50</b>.
</pre>