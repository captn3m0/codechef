---
category_name: easy
problem_code: FGFS
problem_name: 'Bon Appetit'
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: viv001
problem_tester: gerald
date_added: 7-12-2013
tags:
    - easy
    - greedy
    - jan14
    - sorting
    - viv001
editorial_url: 'http://discuss.codechef.com/problems/FGFS'
time:
    view_start_date: 1389605400
    submit_start_date: 1389605400
    visible_start_date: 1389605400
    end_date: 1735669800
    current: 1493558145
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JAN14/mandarin/FGFS.pdf) and [Russian](http://www.codechef.com/download/translated/JAN14/russian/FGFS1.pdf).

 Our chef has recently opened a new restaurant with a unique style. The restaurant is divided into **K** compartments (numbered from **1** to **K**) and each compartment can be occupied by at most one customer.

 Each customer that visits the restaurant has a strongly preferred compartment **p** (**1 ≤ p ≤ K**), and if that compartment is already occupied, then the customer simply leaves. Now obviously, the chef wants to maximize the total number of customers that dine at his restaurant and so he allows (or disallows) certain customers so as to achieve this task. You are to help him with this.

 Given a list of **N** customers with their arrival time, departure time and the preferred compartment, you need to calculate the maximum number of customers that can dine at the restaurant.

### Input

 The first line contains an integer **T** denoting the number of test cases. Each of the next **T** lines contains two integers **N** and  **K** , the number of customers that plan to visit the chef's restaurant and the number of compartments the restaurant is divided into respectively. Each of the next **N** lines contains three integers **si**, **fi** and **pi** , the arrival time, departure time and the strongly preferred compartment of the **ith** customer respectively. 

Note that the **ith** customer wants to occupy the **pith** compartment from **\[si, fi)**  i.e the **ith** customer leaves just before  **fi**  so that another customer can occupy that compartment from  **fi**  onwards./>

### Output

 For every test case, print in a single line the maximum number of customers that dine at the restaurant.

### Constraints

- **1** ≤ **T** ≤  **30**
- 0  ≤ **N** ≤  **105**
- **1**  ≤  **K** ≤  **109**
- 0  ≤ **si** < **fi** ≤  **109**
- **1**  ≤  **pi**  ≤  **K**

### Example

<pre><b>Input:</b>
2
3 3
1 3 1
4 6 2
7 10 3
4 2
10 100 1
100 200 2
150 500 2
200 300 2

<b>Output:</b>
3
3
</pre>### Explanation

**Example case 1.**

All three customers want different compartments and hence all 3 can be accommodated. />

**Example case 2.**

If we serve the **1st**, **2nd** and **4th** customers, then we can get a maximum of 3./>
