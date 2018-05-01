---
category_name: medium
problem_code: CHEFNUM
problem_name: 'Chef and Amazingness of Numbers'
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
problem_author: prateekg603
problem_tester: kevinsogo
date_added: 29-03-2016
tags:
    - dynamic
    - enumeration
    - may16
    - prateekg603
editorial_url: 'http://discuss.codechef.com/problems/CHEFNUM'
time:
    view_start_date: 1463391000
    submit_start_date: 1463391000
    visible_start_date: 1463391000
    end_date: 1735669800
    current: 1493557542
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MAY16/mandarin/CHEFNUM.pdf), [Russian](http://www.codechef.com/download/translated/MAY16/russian/CHEFNUM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/MAY16/vietnamese/CHEFNUM.pdf) as well.

Chef defined _amazingness_ of a number **n** as follows. Let array **a** denote the decimal representation of **n**.
_amazingness_ of **n** is defined by following pseudo code.


<pre>
amazingness(a)
{
    set <b>s</b>;
    int ans = 0;
    for ( int i = 0; i < a.length(); i++ ) {
         int val = 0;
         for ( int j = i; j < a.length(); j++ ) {
            val ^= a[j];  
            // a[j] denotes digit at j-th (0-based indexing) position of <b>n</b> counting <br></br> from most signficant digit (left to right).
            if (val not present in set s before) {
                 ans += val;
                 add val to set <b>s</b>
            }
         }
   }
   return ans;
}
/>
</pre>Given two integers **L, R**. Find out the following sum : _amazingness_**L** + _amazingness_**L + 1** + ... + _amazingness_**R**. As the answer could be large, print your answer modulo **109 + 7 (1000000007)**
### Input

- First line of the input contains an integer **T** denoting the number of test cases.
- Each of the next **T** lines will contain two space separated integer **L, R**.

### Output

For each test case, output a single integer in separate line corresponding to the value of desired sum.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **L, R** ≤ **109**.

### Subtasks

**Subtask #1 : (30 points)**

- **1 ≤ L, R ≤ 106**

**Subtask #2 : (70 points)**

- **1 ≤ L, R ≤ 109**

### Example

<pre><b>Input:</b>
2
1 5
11 14

<b>Output:</b>
15
23
</pre>### Explanation

**Example case 2:** The _amazingness_ values of numbers 11, 12, 13, 14 are 1, 6, 6 and 10 respectively. They sum up to 23.
