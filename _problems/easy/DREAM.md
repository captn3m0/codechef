---
category_name: easy
problem_code: DREAM
problem_name: 'Chef&#39;s Dream'
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
problem_author: 'kamranmaharov '
problem_tester: laycurse
date_added: 10-04-2012
tags:
    - july12
    - kamranmaharov
    - simple
    - sorting
editorial_url: 'http://discuss.codechef.com/problems/DREAM'
time:
    view_start_date: 1342000217
    submit_start_date: 1342000217
    visible_start_date: 1341999849
    end_date: 1735669800
    current: 1493558141
layout: problem
---
All submissions for this problem are available. The Chef is sleeping now. He tries to cook new kind of meals in his dream.
 
These meals are arranged in a row and numbered from 1 to **N** consecutively. For each meal *i* (1&lt;=*i*&lt;=**N**) there is given one integer *f(i)* which denotes the time needed to cook it. Initially, all meals are uncooked. Each assistant of The Chef (there are infinite number of them) can help him with cooking.
 
The abilities of all assistants are same. There can be at most one assistant cooking at each moment. He must choose some continuous subsequence of meals with length **K**(any such subsequence can be chosen). And if there are uncooked meals in it, he will cook all uncooked meals which has the minimum cooking time among uncooked meals in the chosen subsequence. Nothing done to another meals. 
 
 The dream was so interesting that he tried to solve such a problem: What is the minimum number of assistants which can cook all the meals assuming that each of them will cook at most once? But since the bell rings and Chef's friends has come to visit him, he will wake up after 2 seconds. Your program should calculate the answer before The Chef will come to himself.

### Input

First line of input file contains two integers **N** (1&lt;=**N**&lt;=105) and **K** (1&lt;=**K**&lt;=**N**), followed by a line containing **N** integers. The *ith* integer denotes *f(i)*-the cooking time of meal number *i* (1&lt;=*f(i)*&lt;=109)

### Output

Print minimum number of assistans which can cook all the meals in one line.

### Example

<pre>
<b>Input:</b>
5 3
40 30 40 30 40

<b>Output:</b>
3
</pre>

**Explanation:**
3 assistants are enough to cook all the meals. They can work in following schedule: 
1st assistant chooses interval \[2,4\] and cooks meals 2 and 4. 
2nd assistant chooses interval \[1,3\] and cooks meals 1 and 3. 
3rd assistant chooses interval \[3,5\] and cooks meal 5. 
Other schedules can also be possible.
