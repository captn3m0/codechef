---
contest_code: ACMAMR15
contest_name: 'ACM-ICPC Asia-Amritapuri Site, First Round - Online Contest 2015'
problem_code: AMR15E
problem_name: Avantika
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
max_timelimit: '6 - 20'
source_sizelimit: '50000'
problem_author: suh_ash2008
problem_tester: null
date_added: 7-10-2015
tags:
    - acmamr15
    - maths
    - medium
    - offline
    - segment
    - suh_ash2008
editorial_url: 'http://discuss.codechef.com/problems/AMR15E'
time:
    view_start_date: 1444563000
    submit_start_date: 1444563000
    visible_start_date: 1453401000
    end_date: 1444574100
    current: 1493557124
layout: problem
---
All submissions for this problem are available.Young man named Baahubali found a mask next to a giant waterfalls. He imagined that it belonged to a beautiful girl. He was so determined to see the smile on her face that he did the unthinkable - he climbed the mighty waterfalls. When he reached the top, he met Avantika - the girl behind the mask and fell in love with her. He was shocked to learn that she was a warrior, but he was even more impressed after watching her fighting skills.

One fine day, Baahubali made a tattoo on Avantika's hand without her knowledge, and she was eventually very impressed. She asked Shiva to make more tattoos for her, and he sure doesn't want to disappoint her.

Initially, Baahubali has **N** bottles of paint, where each bottle is filled with paint of some color. More specifically, bottle **i** contains paint of color **Ai**, and two different bottles may contain paint of the same color. Baahubali uses 2 values **L** and **R**.

He has a secret formula which is the following: He chooses all the unique paints from bottles in the range **\[L, R\]** (both inclusive). He then arranges the paints in increasing order of their color (**Ai**). Assume that there are **K** unique paints in the range **\[L, R\]**, and after arranging them in increasing order of their color value, he gets **B1, B2, ..., BK**. He now mixes all of them by taking exactly **i** units of paint **Bi** and summing them up to get a new colored paint. More specifically, he takes **sum(i \* Bi)** to get a new colored paint.

Avantika asked him to make **M** tattoos for her. Your task is to help Baahubali find the value of the new color he gets using the above method, given the **Li** and **Ri** values for each of the M tattoos.

### Input

The first line of input consists of a single integer **T** denoting the number of test cases. The description of **T** test cases follow. The first line of each test case consists of a single integer **N**, denoting the number of bottles of paint that Baahubali has. The second line of each test case consists of **N** space separated integers **A1, A2, ..., AN** , where **Ai** denotes the color of the paint in the **ith** bottle. The next line of each test case consists of a single integer **M**, denoting the number of tattoos that Baahubali has to make. Each of the following **M** lines contain 2 space separated integers, where the values on the **jth** line denote **Lj** and **Rj** for the **jth** tattoo.

### Output

For each tattoo, output the value of the color that Baahubali creates using the formula mentioned in the statement above.

### Constraints

- **1** ≤ **T** ≤ **20**
- **1** ≤ **N** ≤ **104**
- **1** ≤ **M** ≤ **104**
- **1** ≤ **Ai** ≤ **109**
- **1** ≤ **Li** ≤ **Ri** ≤ **N**

### Example

<pre><b>Input:</b>
1
5
1 2 3 2 1
5
1 1
1 2
2 4
1 4
1 5
<b>Output:</b>
1
5
8
14
14

</pre>### Explanation
For the first tattoo, **L = 1** and **R = 1**, and there is only 1 unique color (= **1**) in that range. Hence, the answer is **1**.

For the second tattoo, there are 2 unique colors **\[1, 2\]**, and the new color formed is 1\*1 + 2\*2 = **5**.

For the third tattoo, there are 2 unique colors **\[2, 3\]**, and the new color formed is 1\*2 + 2\*3 = **8**.

For the fourth and fifth tattoos, there are 3 unique colors **\[1, 2, 3\]**, and the new color formed is 1\*1 + 2\*2 + 3\*3 = **14**.
