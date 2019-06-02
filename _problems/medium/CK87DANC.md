---
category_name: medium
problem_code: CK87DANC
problem_name: 'Chef and Dancing Steps'
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
    - COB
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
    - kotlin
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
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: saeed_sryhini
problem_tester: kingofnumbers
date_added: 20-10-2017
tags:
    - saeed_sryhini
time:
    view_start_date: 1508697000
    submit_start_date: 1508697000
    visible_start_date: 1508697000
    end_date: 1735669800
    current: 1514816832
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK87/mandarin/CK87DANC.pdf), [Russian](http://www.codechef.com/download/translated/COOK87/russian/CK87DANC.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK87/vietnamese/CK87DANC.pdf) as well.

Majd Ajaj was one of the co-chefs who got accepted in the new job. His job was simple, just taste the food, and provide reports about its quality. Pretty simple huh? he thought that too, until one day one of the other co-chefs made a really spicy food, which made Majd's ears produce smoke like a train. The two of them got into a very bad fight that Chef decided to expel both of them.

When Majd tried to entreat Chef, he offered him a chance.

Chef gave Majd a catalog that contains **N** mini-dances **D1**, **D2**, **...**, **DN**, and an integer **M**. Chef will ask Majd **Q** queries. In each query Chef will give Majd two numbers **L** and **R**, and Majd has to calculate the following:

Consider the range **\[L, R\]** of mini-dances in the catalog, what is the smallest dance length that falls completely inside the range **\[L, R\]**, and the logical **XOR** of its elements is **no less** than **M**?

A dance is defined as a **consecutive** segment of mini-dances. A dance that starts at mini-dance **i**, and ends at mini-dance **j** is defined as **\[i, j\]**. The length of a dance **\[i, j\]** is **j - i + 1**.

Although Majd is an exceptional taster, he is not that good at dancing. Could you please help him find the answer for each query? Or determine that it's impossible for some of them.

### Input

The first line of the input contains an integer **T** denoting the number of test cases.

The first line of each test case contains three space separated integers **N**, **M** and **Q** denoting the length of the array, the number given by Chef, and the number of queries respectively.

The second line of each test case contains **N** space separated integers **D1**, **D2**, **...**, **DN** denoting the mini-dances in the catalog.

**Q** lines follow. Each line contains two space separated integers **Li** and **Ri** denoting the **ith** query.

### Output

For each test case print **Q** lines, where each line contains a single integer, denoting the answer to the corresponding query. If it's impossible for Majd to find a dance for the corresponding query, then simply print **-1**.

### Constraints

- **1 ≤ T ≤ 1000**.
- **1 ≤ N, Q ≤ 3\*105**.
- **0 ≤ M ≤ 109**.
- **0 ≤ Di ≤ 109**.
- The sum of all **N** over all test cases doesn't exceed **3\*105**.
- The sum of all **Q** over all test cases doesn't exceed **3\*105**.

### Example

<pre><b>Input:</b>
2
3 7 2
1 2 4
1 3
2 3
3 3 3
1 2 3
1 2
1 3
2 2

<b>Output:</b>
3
-1
2
1
-1

</pre>
### Explanation

**Example case 1:** The test asks for the smallest dance whose value is **greater** than or **equal**  to  **7** .

The first query asks for the smallest dance which belongs to the interval **\[1, 3\]**. The possible dances are: { **\[1,1\] \[1,2\] \[1,3\] \[2,2\] \[2,3\] \[3,3\]**}, but only the dance **\[1, 3\]** is valid, whose value is **7**.

For the second query, there is no valid dance that has a value greater than or equal to **7**.

**Example case 2:**  For the second query, the smallest valid dance is **\[3,3\]**.
