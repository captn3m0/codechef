---
category_name: easy
problem_code: SNCOUP
problem_name: 'Snakes and their coup against The mongoose'
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
problem_author: admin2
problem_tester: kingofnumbers
date_added: 31-05-2017
tags:
    - admin2
    - easy
    - greedy
    - snckpb17
editorial_url: 'https://discuss.codechef.com/problems/SNCOUP'
time:
    view_start_date: 1496331000
    submit_start_date: 1496331000
    visible_start_date: 1496331000
    end_date: 1735669800
    current: 1497284103
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKPB17/mandarin/SNCOUP.pdf), [Russian](http://www.codechef.com/download/translated/SNCKPB17/russian/SNCOUP.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKPB17/vietnamese/SNCOUP.pdf) as well.

Snakeland is a well organised city. The houses of the city are organised in an orderly rectangular fashion with dimensions **2 \* n**, i.e. there are total two rows and **n** columns. The house in the i-th row and j-th column is also said to be the house at coordinates (i, j). Some of the houses are occupied by snakes, while the others are empty. You are given this information through an array **s** of dimension **2 \* n**, where, if **s**\[i\]\[j\] = '\*', it denotes that there is a snake in the house at coordinates (i, j), and if **s**\[i\]\[j\] = '.', it denotes that the house is empty.

These snakes are planning a coup against a mongoose who controls their city from outside. So, they are trying their best to meet with other snakes and spread information about the date of the coup. For spreading this information, they can just hiss from their house and usually their hiss is so loud that it will be heard in all the cells except if there is a soundproof fence built that cuts the voice. Note that the external borders of Snakeland are already built of soundproof material. The mongoose got to know about the plan, and he wants to construct sound proof fences along the borders of the houses so that no two people should be able to communicate with each other. The fence can be either vertical or horizontal. Each fence can be of any length, but the mongoose wants to minimize the number of fences to be built. Find out the minimum number of fences that the mongoose should build.

### Input

The first line of the input contains an integer **T** denoting number of test cases. The descriptions of the **T** test cases follow.

The first line of each test case contains a single integer, **n**.

Each of the next two lines contains **n** characters denoting the first and the second rows of Snakeland respectively.

### Output

For each test case, output a single integer corresponding to the minimum number of fences that the mongoose needs to build.

### Constraints

- 1 ≤ **T** ≤ 10
- 1 ≤ **n** ≤ 105

### Example

<pre>
<b>Input</b>
<tt>
3
2
**
**
3
***
*..
3
*..
.*.
</tt>

<b>Output</b>
2
3
1

</pre>### Explanation
![](https://discuss.codechef.com/upfiles/fences.png)All the examples are shown in the pictures. The fences built are shown by red colored horizontal or vertical segments. You can see that after putting these borders no snake can talk with any another snake.
