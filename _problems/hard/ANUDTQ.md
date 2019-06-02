---
category_name: hard
problem_code: ANUDTQ
problem_name: 'Dynamic Trees and Queries'
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
problem_author: anudeep2011
problem_tester: xcwgf666
date_added: 3-02-2014
tags:
    - anudeep2011
    - data
    - hard
    - may14
    - tree
editorial_url: 'http://discuss.codechef.com/problems/ANUDTQ'
time:
    view_start_date: 1399887000
    submit_start_date: 1399887000
    visible_start_date: 1399887000
    end_date: 1735669800
    current: 1493556613
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/MAY14/mandarin/ANUDTQ.pdf) and [Russian](http://www.codechef.com/download/translated/MAY14/russian/ANUDTQ.pdf).

Given a directed tree with **N** nodes. You need to process **M** queries.
Each node has a **key** and a **value**, a node is referenced by its key. **N** nodes have **keys** from 0 to **N-1**.
Root always has the **key** equal to 0. Queries can be of the following 4 types:

1\. Given a **key** of a node present in the tree, append a child node to it. The new node gets the smallest never-used positive integer as its key. The **value** of the new node will be given in the input.

2\. Given a **key** of a node(call it **A**) present in the tree. Add **value** to the value of all the nodes present in the subtree rooted at **A**.

3\. Given a **key** of a node(call it **A**) present in the tree. Remove the subtree rooted at **A** from the tree.

4\. Given a **key** of a node(call it **A**) present in the tree. Output the sum of values of all the nodes in subtree rooted at **A**.

**Input is encoded:**

**Keys** in **M** Queries of the input are encoded in the following way:

Let **SPECIAL** = 0 initially. Whenever a query of the type 4 occurs, **SPECIAL** is updated to the result of that query.
All the **keys** given in queries are encoded, in order to decode them you need to add SPECIAL to it.

That is, you are given **encoded\_key** as input, to get **key** use the formula **key** = **SPECIAL** + **encoded\_key**.

### Input

First line of input has **N**, the number of nodes.

Second line has **N** integers, the values of given **N** nodes respectively.

Then, **N-1** lines follow, each has two integers **u**, **v**. which specifies an edge from **u** to **v**.

Next line contains a single integer **M**, the number of queries.

Each query consists of 2 lines, First line has the the type of query, second line is as follows:

For queries 1 and 2, there are two integers, first one represents the **key** of a node in tree, second one represents the **value**.

For queries 3 and 4, there is a single integer, which represents the **key** of a node in tree.

### Output

For each query of type 4, output the required answer.

### Constraints

- 1 ≤ **N** ≤ 10^5
- 1 ≤ **M** ≤ 10^5
- 0 ≤ **u** < N
- 0 ≤ **v** < N, **u** is not equal to **v**
- All the **keys** in the input are valid
- If the type of the query is 3, the the **key** is nonzero.
- **All the rest numbers in the input are in the range \[-1000, 1000\]**

### Example

<pre>
<b>Input:</b>
2
10 20
0 1
4
4
0
1
-30 5
2
-30 1
4
-30
<br></br>
<b>Output:</b>
30
38
</pre>
### Explanation

**Query #1**

**type** = 4 **encoded\_key** = 0

Initially **SPECIAL** = 0

**key** = **encoded\_key + SPECIAL** = 0

value at 0 + value at 1 = 10 + 20 = 30 is the answer

**Now SPECIAL is updated to 30**

**Query #2**

**type** = 1 **encoded\_key** = -30 **value** = 5 

**SPECIAL** = 30 

**key** = **encoded\_key** + **SPECIAL** = -30 + 30 = 0

So we add a child node(with the **key** = 2) to the node with the **key** 0, the child node gets the **value** of 5


**EDITS MADE:**

Firstly, sorry for the mistake.

**Old :** Let **SPECIAL** = 0 initially. Whenever a query of the type 4 occurs, **SPECIAL** is increased by the result of that query.

**New :** Let **SPECIAL** = 0 initially. Whenever a query of the type 4 occurs, **SPECIAL** is updated to the result of that query.
/>/>/>/>/>
