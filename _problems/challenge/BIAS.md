---
category_name: challenge
problem_code: BIAS
problem_name: '(Challenge) Biased Committee'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
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
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: kingofnumbers
problem_tester: null
date_added: 31-01-2018
tags:
    - challenge
    - feb18
    - inversions
    - kingofnumbers
editorial_url: 'https://discuss.codechef.com/problems/BIAS'
time:
    view_start_date: 1518427800
    submit_start_date: 1518427800
    visible_start_date: 1518427800
    end_date: 1735669800
    current: 1525199655
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/FEB18/mandarin/BIAS.pdf), [Russian](http://www.codechef.com/download/translated/FEB18/russian/BIAS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/FEB18/vietnamese/BIAS.pdf) as well.

**N** contestants are participating in a competitive programming contest. Each participant has a unique id between 1 and **N** (both inclusive). There are **M** problems in the contest.

The organizing committee didn't announce the maximum number of points for each problem; we only know that after the contest, the ratio of the number of points gained by the participant with id **i** on problem **j** to the maximum number of points for problem **j** is equal to **Aij/1000000**, for each valid pair **i**, **j**. The total score for each participant is the sum of points gained on all problems.

After the contest, participants are ranked according to the total score; in case of a tie, the participant with the highest id has the best (lowest) rank.

For each valid **i**, let's denote the rank of the participant with id **i** by **Ri**. An inversion in the standings is a pair **i**, **j** such that **i** &lt; **j** and **Ri &gt; Rj**.

The committee now wants to assign maximum scores to problems. However, they can't assign the scores arbitrarily. For each problem, you are given two numbers **L** and **U** denoting the lower and upper bound for the maximum score — the maximum score for this problem has to be an integer between **L** and **U** (both inclusive).

The committee wants to assign the maximum scores in such a way that the number of inversions in the final standings is minimized. (That is, the best situation is when the participant with id 1 is ranked first, participant 2 is ranked second and so on.)

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains two space-separated integers **N** and **M**.
- **M** lines follow. For each valid **i**, the **i**-th of these lines contains two space-separated integers **Li** and **Ui** denoting the lower and upper bounds to the **i**-th problem.
- **N** more lines follow. For each valid **i**, the **i**-th of these lines contains **M** space-separated integers **Ai1, Ai2, ..., AiM**.

### Output

For each test case, print a single line containing **M** space-separated integers denoting the maximum scores for the problems.

### Constraints

- 1 ≤ **T** ≤ 5
- 1 ≤ **N** ≤ 1,000
- 1 ≤ **M** ≤ 1,000
- 0 ≤ **Aij** ≤ 1,000,000 for each valid **i**, **j**
- 0 ≤ **Li** ≤ **Ui** ≤ 1,000,000 for each valid **i**

### Test Generation

Each input file will contain **T** = 5 test cases with the following constraints:

- first test case: **N** = 1000, **M** = 1000
- second test case: **N** = 1000, **M** = 200
- third test case: **N** = 1000, **M** = 50
- fourth test case: **N** = 1000, **M** = 20
- fifth test case: **N** = 1000, **M** = 10

The remaining parameters are selected in the following way:

- for each valid **i**, **Li** is selected uniformly randomly between 0 and 1000000 (both inclusive)
- for each valid **i**, each **Ui** is selected uniformly randomly between **Li** and 1000000 (both inclusive)
- for each valid **i**, each **Aij** is selected uniformly randomly between 0 and 1000000 (both inclusive)

### Scoring

Your score for each test case is equal to max(0,**N** \* (**N**-1)/ 4 - **inv**) where **inv** is the number of inversions in the final standings produced by your solution. Your total score is the sum of scores for all test cases in all test files, you should try to maximize this score. The scores visible during the contest will be computed only on 4 files. The scores based on all test files will be revealed after the contest.

### Example

<pre><b>Input:</b>
1
3 3
1 10
1 10
1 10
1 5 6
2 4 5
7 4 2
<b>Output:</b>
4 6 8
</pre>
### Explanation

**Example case 1:** participant 1 will have total score equal to (1\*4 + 5\*6 + 6\*8)/1000000 = 82/1000000, participant 2 will have total score equal to (2\*4 + 4\*6 + 5\*8)/1000000 = 72/1000000, participant 3 will have score equal to (7\*4 + 4\*6 + 2\*8)/1000000 = 68/1000000, so participants will be ranked in the standings by 1, 2, 3, which has 0 inversions
