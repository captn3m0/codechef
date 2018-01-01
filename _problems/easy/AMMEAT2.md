---
category_name: easy
problem_code: AMMEAT2
problem_name: 'Andrew and the Meatballs again'
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
problem_author: witua
problem_tester: laycurse
date_added: 21-04-2013
tags:
    - ad
    - cook33
    - simple
    - witua
editorial_url: 'http://discuss.codechef.com/problems/AMMEAT2'
time:
    view_start_date: 1366569000
    submit_start_date: 1366569000
    visible_start_date: 1728420665
    end_date: 1735669800
    current: 1493558211
layout: problem
---
Andrew likes meatballs very much as you know.

He has **N** plates of meatballs, here the **i**th plate contains exactly **i** meatballs. Andrew wants to take exactly **K** plates to his trip to Las Vegas.

On this occasion, he wants to choose the **K** plates by a strange way: if both **i**th and **j**th plates are chosen, then **i** and **j** must not be [relative prime](http://en.wikipedia.org/wiki/Coprime_integers), for all **1 ≤ i < j ≤ N**.

Please help him to choose **K** plates. Output one of the possible choices.

### Input

The first line of the input contains an integer **T**, denoting the number of test cases. The description of **T** test cases follows. The first line and only line of each test case contains two space-separated integers **N** and **K**.

### Output

For each test case, output **K** distinct integers, denoting the number of selected plates, where the plates are numbered from **1** to **N**. If there are multiple solutions, any one will do. If it is impossible to choose **K** plates, print only one integer **-1**.

### Constraints

- **1** ≤ **T** ≤ **7**
- **1** ≤ **K** ≤ **N** ≤ **777**

### Example

<pre><b>Input:</b>
2
100 3
100 100

<b>Output:</b>
45 63 35
-1

</pre>### Explanation
**Example case 1**: One of the possible choices is that he takes **45**th plate, **63**rd plate, and **35**th plate. Because
**GCD(45, 63) = 9**,
**GCD(45, 35) = 5**,
**GCD(63, 35) = 7**.

**Example case 2**: He must choose all **N = K** plates in this case. But, for example, the pair of **3**rd plate and **5**th plate does not satisfy his desire. So it is impossible to choose **K** plates.
