---
category_name: easy
problem_code: DIAMOND
problem_name: 'Need More Diamonds'
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
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: kaushik_iska
problem_tester: anton_lunyov
date_added: 17-09-2012
tags:
    - dynamic
    - easy
    - kaushik_iska
    - oct12
editorial_url: 'http://discuss.codechef.com/problems/DIAMOND'
time:
    view_start_date: 1350293400
    submit_start_date: 1350293400
    visible_start_date: 1350293400
    end_date: 1735669800
    current: 1493558137
layout: problem
---
All submissions for this problem are available.**Alice** and **Bob** have decided to play the following game. Initially there are **N** diamonds placed in a straight line. Diamonds numbered from 1 to **N** in consecutive order. Each diamond has a specific value. The value of **i-**th diamond is **Vi** for **i** from 1 to **N**. Players make moves alternatively. In each move player proceeds as follows. If there is only one diamond left the player takes it otherwise he/she tosses the unbiased coin and if it lands on heads he/she takes the **first** diamond among the diamonds that are currently present in a line, otherwise he/she takes the
**last** diamond. What is the expected total value **Alice** will get, if she plays **first**? Note that the unbiased coin lands on heads with probability 0.5 (and hence lands on tail with the same probability). Also note that the total value is the sum of values of all diamonds that Alice will get.

### Input

The first line of the input contains an integer **T**, the number of test cases. **T** test cases follow. Each test case consists of exactly 2 lines. The first line of each test case contains a single integer
**N**, the number of diamonds. The second line contains **N** space separated integers
**V1**, **V2**, ..., **VN**, the values of diamonds in the order they lie in a line.

### Output

Output for each test case should contain a single real number in a separate line, the expected total value Alice will get for this particular test. Your answer will be considered as correct if it has an absolute error less than **10-2**.

### Constraints

1 ≤ **T** ≤ 500 
1 ≤ **N** ≤ 2000 
0 ≤ **Vi** ≤ 999

### Example

<pre>
<b>Input</b>
4
1
100
2
42 0
3
1 4 9
4
5 5 5 5

<b>Output</b>
100.000
21.000
9.500
10.000

</pre>### Explanation
**Case 1:** In the first move Alice has to take **100**, and this is the only move. Hence, the expected value Alice will get is **100**.

**Case 2:**  It is quite clear that Alice will make only 1 move. As she can get **42** or  with
equal probability, the expected value she will get is equal to **0.5 ∙ 42 + 0.5 ∙ 0 = 21**.

**Case 3:**  Let's consider all possible scenarios how game can proceed:

1st move2nd move3rd moveAlice total valueAlice gets 1Bob gets 4Alice gets 910Alice gets 1Bob gets 9Alice gets 45Alice gets 9Bob gets 1Alice gets 413Alice gets 9Bob gets 4Alice gets 110Clearly each of these scenarios will happen with probability **0.5 ∙ 0.5 = 0.25**. Hence the expected value Alice will get is equal to **0.25 ∙ 10 + 0.25 ∙ 5 + 0.25 ∙ 13 + 0.25 ∙ 10 = 9.5**.

**Case 4:** Out of the 4 diamonds, Alice will get some 2 of them. As all of the diamonds have the same value **5**, the expected value she will get is equal to **5 + 5 = 10**.
