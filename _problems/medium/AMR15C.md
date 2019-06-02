---
category_name: medium
problem_code: AMR15C
problem_name: Kalakeya
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
problem_author: suh_ash2008
problem_tester: null
date_added: 11-10-2015
tags:
    - acmamr15
    - constructive
    - greedy
    - implementation
    - medium
    - suh_ash2008
editorial_url: 'http://discuss.codechef.com/problems/AMR15C'
time:
    view_start_date: 1453401000
    submit_start_date: 1453401000
    visible_start_date: 1453401000
    end_date: 1735669800
    current: 1493557447
layout: problem
---
All submissions for this problem are available.The **Kalakeyas** were a powerful, ferocious and cruel clan of Danavas. They were known to be really strong and they did not have any war strategy. They would just attack the enemy randomly and overpower them with sheer number of soldiers. However, we all know that Baahubali and Bhallaladeva defeated the Kalakeyas by following the **Thrishul** strategy, and successfully defended their kingdom Maahishmati. We also know that Baahubali was very smart, and the truth is that he predicted how the Kalakeyas would attack and devised a counter strategy for the same, the night before the war. This is what he found:

The Kalakeyas had **N** forts, numbered **1** to **N** and Baahubali had **N** soldiers, numbered **1** to **N**. Baahubali discovered that he can permute his soldiers in any way to get a permutation of **1** to **N** => **P1, P2, ..., PN**. He would then send his soldiers to attack the forts in the following way: soldier **P1** attacks **fort 1**, soldier **P2** attacks **fort 2**, ..., soldier **PN** attacks **fort N**. It is easy to note that each soldier attacks exactly one fort and no two soldiers attack the same fort. Baahubali also got to know about a secret key of the Kalakeyas, which is an integer **K**. A soldier **X** can destroy a fort **Y**, iff **abs(X - Y) >= K**. For more details on the **abs()** function, check [here](https://en.wikipedia.org/wiki/Absolute_value).

Your task is to determine whether Baahubali's soldiers can be permuted in some way, such that all forts can be destroyed. In other words, for a permutation **P1, P2, ..., PN**, Baahubali's soldiers can destroy all the forts iff **abs(Pi - i) >= K,** for all **1 <= i <= N**. If this is possible, you are also required to output the **lexicographically** smallest such permutation. If it is not possible, output **-1**.

**Note**: A permutation **A1, A2, ..., AN** is said to be lexicographically smaller than a permutation **B1, B2, ..., BN**, if and only if at the first **i** where **Ai** and **Bi** differ, **Ai** comes before **Bi**. You can refer [here](https://en.wikipedia.org/wiki/Lexicographical_order) for a more detailed definition of lexicographic ordering.

### Input

The first line of input consists of a single integer **T** denoting the number of test cases. Each of the following **T** lines contain two space separated integers **N** and **K** denoting the values mentioned in the statement above.

### Output

For each test case, output a single line containing **N** space separated integers (which should be a permutation of **\[1..N\]**, if Baahubali's soldiers can break all the forts. If it is not possible to break all the forts, output "-1" (quotes for clarity).

### Constraints

- **1** ≤ **T** ≤ **1000**
- **1** ≤ **N** ≤ **105**
- 0 ≤ **K** ≤ **N**
- The sum of **N** over all test cases in a single test file will not exceed **105**

### Example

<pre><b>Input:</b>
3
2 2
3 0
3 1

<b>Output:</b>
-1
1 2 3
2 3 1
</pre>
### Explanation

**For the first test case**, **N = 2** and **K = 2**. It is impossible to permute **\[1, 2\]** in any way such that **abs(P\[1\]-1) >= 2** and **abs(P\[2\]-2) >= 2**. Hence, output is **-1**.

**For the second test case**, **N = 3** and **K = 0**. We can just set **P\[i\] = i**, and hence the answer is **1 2 3**

**For the third case**, the valid permutations are **\[2, 3, 1\]** and **\[3, 1, 2\]**. The answer is **\[2, 3, 1\]** since it is lexicographically smaller than **\[3, 1, 2\]**.
