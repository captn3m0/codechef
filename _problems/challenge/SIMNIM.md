---
category_name: challenge
problem_code: SIMNIM
problem_name: 'Simultaneous Nim'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - PERL6
    - TEXT
    - CLOJ
    - FS
max_timelimit: '0.806755'
source_sizelimit: '50000'
problem_author: gennady.korotkevich
problem_tester: laycurse
date_added: 24-01-2012
tags:
    - bruteforce
    - challenge
    - gauss
    - gennady
    - sep12
editorial_url: 'http://discuss.codechef.com/problems/SIMNIM'
time:
    view_start_date: 1347346636
    submit_start_date: 1347346636
    visible_start_date: 1347355800
    end_date: 1735669800
    current: 1525454455
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Chef is a famous [Nim](http://en.wikipedia.org/wiki/Nim) player. He has his own set of **N** heaps, and the **i**-th heap contains **Ai** stones. What is so special about this set is that with this set of stones Chef always wins when he's moving second. Chef's friends don't know the math behind the game at all, but the fact that Chef is playing with the same set of stones all the time seems suspicious to them.

To prove that he's a really good player even with other sets, Chef decided to split his set into **K** sets so that each of the **N** original heaps is used in exactly one set. Then he's going to play **K** Nim games simultaneously with these sets. Chef's ultimate goal is letting his opponent move first in each of these **K** games and still winning all the games! To make it even more impressive, Chef wants the value of **K** to be as large as possible.

It's of no secret that in the game of Nim a position is winning for the player moving second if XOR of all the numbers of stones in the heaps is equal to 0; for more information check [this](http://en.wikipedia.org/wiki/Nim#Mathematical_theory). You may assume that Chef and his opponents always play optimally -- they always win whenever they have a winning strategy.

You are to help Chef with this separation. Note that this is a challenge problem: it's not required for **K** to be maximum possible, but the bigger is **K**, the more points you get.

### Input

The first line of the input file contains one integer **T** -- the number of test cases (no more than 10). Each test case is described by two lines. The first of them contains a single integer **N**, the second contains **N** space-separated positive integers **Ai** (**i** = 1..**N**).

### Output

For each test case, output one line containing exactly **N** positive integers. The **i**-th of these numbers should be the index of the game in which the **i**-th heap of stones should be involved (in the order as the heaps are given in the input). The value of **K** for this test case is then calculated as the maximum of the numbers you printed. Note that each integer between 1 and **K**, inclusive, should be presented among these numbers at least once.

### Scoring

If any of the test cases is solved incorrectly, you'll receive Wrong Answer. Incorrect answers include outputting something else than **N** positive integers for each test case, making some sets of heaps empty and making some sets of heaps losing for Chef.

**Note** that it's possible to output the answer with **K** = 1 (i.e., making no splits of the initial set is allowed). Nevertheless, if your output corresponds to **K** = 1 for **all** test cases in a single output file, you'll receive Wrong Answer as well. It's guaranteed that each official test file contains at least one test case for which a solution with **K** > 1 exists.

If all your answers are correct, your score for each test case will be calculated as 100\***N**/**K**. Your score for each file is the average of your scores on the individual test cases in this file. Your overall score is the average of your scores on the individual test files.

Your goal is to minimize the overall score.

### Example

<pre>
<b>Input:</b>
2
7
1 2 3 4 5 6 7
6
1 1 2 2 3 3

<b>Output:</b>
1 1 1 2 2 2 2
1 2 1 2 1 2

<b>Explanation:</b>
</pre>Both of the answers are correct. The score is 100\*7/2 = 350 for the first test case and 100\*6/2 = 300 for the second test case. The score for this file is thus (350+300)/2 = 325. Note that the second test case allows a better solution, 1 1 2 2 3 3. ### Test Case Generation

Every official input file contains exactly 10 test cases. In each test case **N** is chosen randomly and uniformly between 10 and 1000, inclusive, and **M** is chosen randomly and uniformly between 5 and 60, inclusive. Then, the values of **Ai** for 1 ≤ **i** < **N** are generated randomly and uniformly between 1 and 2**M**-1, inclusive, and the value of **AN** is calculated as XOR of all other **Ai**'s (note that this way the generated set of heaps is certainly winning for Chef). If the value of **AN** appears to be 0, the whole process of test case generation is restarted.
