---
category_name: hard
problem_code: WESTAND
problem_name: 'Chef and Direction'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
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
max_timelimit: '8'
source_sizelimit: '50000'
problem_author: omelyanenko
problem_tester: null
date_added: 30-04-2016
tags:
    - omelyanenko
time:
    view_start_date: 1512984600
    submit_start_date: 1512984600
    visible_start_date: 1512984600
    end_date: 1735669800
    current: 1514816843
layout: problem
---
All submissions for this problem are available.Chef has opened new restaurant "Direction" and his first problem is to find cooks. Chef has **K** candidates, each of them is characterized by **P\[i\]** and **S\[i\]** - the number of dishes that he can cook per minute and the salary he wants, cook gets salary only once. Two cooks can't work on the one order together, but every cook whenever he wants can interrupt another cook and start working on his order, even if the previous cook doesn't finish some of the dishes from order. Moreover, the transition from one order to another is instantaneous (this time can be ignored).

The restaurant has received **N** orders. Each order is characterized by two numbers **D\[i\]** i **M\[i\]** - the number of dishes in order and the number of minutes that client is ready to wait. "Direction" is a new restaurant, so Chef doesn't want to leave bad impression on clients and doesn't want to let them go hungry.

Chief asks you to help him to resolve which of the **K** candidates should get an offer for this job. So, you have to choose some candidates, which can prepare all orders in time and at the same time you have to minimize expenses for the salaries for cooks. "Direction" opens in a minute with number 0. If you can not fulfill all orders in time, then output "-1".

### Input

The first line of input contains a single integer **T** denoting the number of test cases. This will be followed by **T** test cases. 
The first line of each test case contains integer **K** denoting numbers of candidates.
Each of the next K line of each test case contains two integers **P\[i\]** and **S\[i\]** denoting the number of dishes that cook with number **i** can cook per minute and the salary he wants.
The next line of each test case contains **N** denoting numbers of orders.
Each of the next **N** lines of each test case contains two integers **D\[i\]** and **M\[i\]** denoting the number of dishes in order with number **i** and the number of minutes that client with number **i** is ready to wait.

### Output

For each test case in a separate line output the minimum of possible costs for hiring cooks or "-1".

### Constraints and Subtasks

- **1** ≤ **T** ≤ **5**

**Subtask 1 : 10 points** - **1** ≤ **K** ≤ **10**
- **1** ≤ **P\[i\]** ≤ **1000**
- **1** ≤ **S\[i\]** ≤ **100**
- N = **1**
- **1** ≤ **D\[i\]** ≤ **10000**
- **1** ≤ **M\[i\]** ≤ **100**

**Subtask 2 : 30 points** - **1** ≤ **K** ≤ **10**
- **1** ≤ **P\[i\]** ≤ **1000**, **P\[1\]** = **P\[2\]** = ... = **P\[K\]**
- **1** ≤ **S\[i\]** ≤ **100**
- **1** ≤ **N** ≤ **50**
- **1** ≤ **D\[i\]** ≤ **10000**
- **1** ≤ **M\[i\]** ≤ **100**

**Subtask 3 : 60 points**- **1** ≤ **K** ≤ **10**
- **1** ≤ **P\[i\]** ≤ **1000**
- **1** ≤ **S\[i\]** ≤ **100**
- **1** ≤ **N** ≤ **50**
- **1** ≤ **D\[i\]** ≤ **10000**
- **1** ≤ **M\[i\]** ≤ **100**

### Example


<pre><b>Input:</b>
<tt>
4
4
1 6
1 7
4 1
1000 15
3
2 1
2 1
2 1
2
3 2
1000 15
2
2 1
2 1
3
4 1
1 1
1 4
2
3 1
3 1
3
4 76
2 70
1 82
4
5 3
7 2
3 1
5 3
</tt>

<b>Output:</b>
<tt>
14
15
-1
228
</tt>
</pre>### Explanation

**Example case 1.**
Chef has to hire first, second and third cooks(6 + 7 + 1 = 14).
Cook 1:
 0 - 0.(3) sec - first order
 0.(3) - 0.(6) sec - second order
 0.(6) - 1 sec - third order
Cook 2:
 0 - 0.(3) sec - second order
 0.(3) - 0.(6) sec - third order
 0.(6) - 1 sec - first order
Cook 3:
 0 - 0.(3) sec - third order
 0.(3) - 0.(6) first order
 0.(6) - 1 second order
**Example case 2.**
Chef has to hire only the second cook(15).
Cook 3:
 0 - 0.002 first order
 0.002 - 0.004 second order
**Example case 3.**
Even if Chef hire all cooks they can't make all orders on time, therefore answer is -1.
**Example case 4.**
Chef has to hire all cooks(76 + 70 + 82 = 228).
Cook 1:
 0 - 0.5 third order
 0.5 - 2 second order
 2 - 2.5 fourth order
 2.5 - 3 first order
Cook 2:
 0 - 0.5 second order
 0.5 - 1 third order
 1 - 2.5 first order
 2.5 - 3 fourth order
Cook 3:
 0 - 2 fourth order
