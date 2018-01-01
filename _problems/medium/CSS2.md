---
category_name: medium
problem_code: CSS2
problem_name: 'Cascading Style Sheets'
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
problem_author: piyushkumar
problem_tester: xiaodao
date_added: 21-10-2014
tags:
    - easy
    - hash
    - ltime17
    - piyushkumar
editorial_url: 'http://discuss.codechef.com/problems/CSS2'
time:
    view_start_date: 1414312200
    submit_start_date: 1414312200
    visible_start_date: 1414312200
    end_date: 1735669800
    current: 1493557974
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME17/mandarin/CSS2.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME17/russian/CSS2.pdf).

Cascading Style Sheets, or _CSS_ is a style sheet language, most popularly known for styling web pages. Each _object_ on a web page (like a picture, a paragraph, a table) can have various properties (like height, width, size, colour), and these properties can be set using CSS. Each of these _objects_ has a unique identifier called _id_, using which CSS can identify the object and assign value to its property.

Due to hierarchical nature of the web page, often same property of an object gets assigned different values in different CSS statements. To decide what the final value will be, each statement has a _priority_ assigned to it. The statement with the highest priority will be the one that sets the value of the property. If there are more than one statements with same priority, then the one which was executed last amongst those will set the value.

Given multiple CSS statements in the order they were executed, answer a few queries about the final values of certain objects

### Input

First line contains two space-separated integers **N** and **M**, the number of CSS statements and the number of queries respectively.
Following N lines will each have 4 values **id, attr, val, priority**, which mean that a CSS statement tries to assign value **val** to the attribute named **attr** of the object **id**, and that the priority of this statement is equal to **priority**.
Each of the next M lines will contain two values **id** and **attr**, for which you have to print value of the attribute **attr** of object **id**. You can assume that there is a statement that assigns value to this attribute **attr** of object **id**.

### Output

Print exactly M lines, ith line contains the answer to the ith query as described above.

### Constraints


<pre>

</pre>12. 1 ≤ value, priority ≤ 106, for all subtasks.13. **For 20 points :** 1 ≤ id, N, M, attr ≤ 103
14. **For 30 points :** 1 ≤ N, M ≤ 103, 1 ≤ id, attr ≤ 106
15. **For 50 points :** 1 ≤ N, M ≤ 105, 1 ≤ id, attr ≤ 106
### Example

**Input:**

`3 1<br></br>22 1 200 2<br></br>22 1 300 2<br></br>22 1 100 1<br></br>22 1`
**Output:**

`300`
