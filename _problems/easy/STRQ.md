---
category_name: easy
problem_code: STRQ
problem_name: 'Chef and Strings'
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
problem_author: ma5termind
problem_tester: shangjingbo
date_added: 9-10-2014
tags:
    - feb15
    - ma5termind
    - precalculation
editorial_url: 'http://discuss.codechef.com/problems/STRQ'
time:
    view_start_date: 1424079000
    submit_start_date: 1424079000
    visible_start_date: 1424079000
    end_date: 1735669800
    current: 1493558190
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/FEB15/mandarin/STRQ.pdf) and [Russian](http://www.codechef.com/download/translated/FEB15/russian/STRQ.pdf).

Chef likes strings a lot but moreover he likes good strings. Chef calls a string **str** a good string if **str** starts and ends at different characters. For eg : strings such as **abab** , **baccba** , **abc** are all good strings whereas strings like **aba**, **baab** , **baacaab** are not good at all .

Today, Chef has a special string **P** consisting of lower case letters **"c"** , **"h"** , **"e"** and **"f"** only. Chef wants to make some queries about his string **P**.

Each of chef's query has the following form **a b L R**. For a given query, Chef wants to count the number of good strings which starts at letter **a** and ends at letter **b** such that starting index **Si** and ending index **Ei** of a chosen substring satisfies **L <= Si < Ei <= R**.

**NOTE**

Two substrings **P1** and **P2** are considered to be different if either **S1 != S2** or **E1 != E2** where **S1,E1** and **S2,E2** are the starting and ending index of string **P1** and string **P2** respectively.

Chef is not able to accomplish this task efficiently. Can you help him ?

### Input

First line of the input contains a string **P** denoting the chef's special string. Next line of the input contains a single integer **Q** denoting the number of chef's queries. Next **Q** lines of the input contains **four** space separated parameters where the first **two** parameters are characters denoting **a** and **b** respectively and rest **two** are integers denoting **L** and **R** respectively.

### Output

For each chef's query, print the required answer.

### Constraints

- **1 <= |P| <= 106**
- **1 <= Q <= 106**
- **1 <= L <= R <= |P|**
- **P,a,b** belongs to the set of lower case letters **\[c,h,e,f\] and a != b**.
- **All test files are strictly according to constraints.**

### Subtasks

- Subtask #1: **1<=|P|,Q<=104 : 27 pts**
- Subtask #2: **1<=|P|,Q<=105 : 25 pts**
- Subtask #3: **1<=|P|,Q<=106 : 48 pts**

### Example

<pre>
<b>Input</b>
checfcheff
5
c h 1 10
c f 1 10
e c 1 10
c f 1 5
c f 6 10

<b>Output</b>
4
8
2
2
2

</pre>### Explanation
- Q1 : good strings are **ch** , **checfch** , **cfch** , **ch**
- Q2 : good strings are **checf** , **checfchef** , **checfcheff** , **cf** , **cfchef** , **cfcheff** , **chef** , **cheff**

### Warning

Large test data set, Prefer to use faster input/output methods .
