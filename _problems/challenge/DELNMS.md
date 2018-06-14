---
category_name: challenge
problem_code: DELNMS
problem_name: 'Deleting numbers'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: sereja
problem_tester: white_king
date_added: 9-06-2013
tags:
    - ad
    - aug13
    - challenge
    - order
    - sereja
editorial_url: 'http://discuss.codechef.com/problems/DELNMS'
time:
    view_start_date: 1376299800
    submit_start_date: 1376299800
    visible_start_date: 1376299800
    end_date: 1735669800
    current: 1525199509
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Sereja has an array of **n** integers **a\[1\], a\[2\], ..., a\[n\]**. In one move Sereja can do the following operation

Assume integers **v** and **t**, Where **1 ≤ v, t ≤ n**, such that, all the elements of the array **a\[v\], a\[v + t\], a\[v + t \* 2\], ... a\[v + t \* k\]** Where **k ≥ 0** are equal.

To delete all elements **a\[v\], a\[v + t\], a\[v + t \* 2\], ... a\[v + t \* k\]** from the array. The remaining elements are written in **a** without any gaps.

Note that you can not decide the value of **k**. After you decide the integers **v** and **t**, **k** will be set to the largest value possible. That is, the largest **k** such that **v + t \* k ≤ n**. Your selection of **v** and **t** must satisfy the conditions described above for this value of **k**.

Sereja wants to delete the entire array. Help him delete all the elements of the array in the fewest number of moves. Since this is a Challenge Problem, your objective is to minimize the number of moves it takes to delete the entire array.

### Input

The first line contains an integer **n**, the size of the array. The second line contains integers **a\[1\], a\[2\], ..., a\[n\]**, the integers written in the array.

### Output

For each test case print in the first line number **q**, the number of moves you will take. In next **q** lines print pairs of the integers **v\[i\], t\[i\] (1 ≤ i ≤ q)**, the values for **v** and **t** that you assume during the move **i**. Be careful with the output sequence and output format. This problem uses a **custom judge**. Non adherence to the format may lead to verdicts like internal error, run time error and wrong answer.

### Constraints

- **1 ≤ n ≤ 100000**
- **1 ≤ a\[i\] ≤ 100000**

### Example

<pre>
<b>Input 1:</b>
3
1 1 1
<b>Output 1:</b>
1
1 1

<b>Input 2:</b>
4
1 2 1 2
<b>Output 2:</b>
4
4 4
3 3
2 2
1 1

<b>Input 3:</b>
5
1 2 3 4 1
<b>Output 3:</b>
4
1 4
3 1
2 1
1 1

</pre>### Explanation

In the third case

- After the move 1 4, we remove 1st and 5th (1 + 4) number, and the array will become: 2 3 4.
- After the move 3 1, 4 will be omitted and the array will become 2 3. Note how the 1-based indexes now refer to the positions in the array \[2, 3, 4\] and not the positions of 2, 3, 4 in the original array.
- And after the following two commands 3 and 2 will be removed and the array will become empty.

### Scoring

If your program solves a test case, it receives the score of **100\*q/n** for that test case. Solving a test case means that the given array should be emptied using the given operation. Otherwise the test case is considered, not solved and the verdict Wrong Answer is provided. The total score of the program is simply the sum of the scores for each test files, divided by the number of test files (this is what the generic master judge does). Each test file has a single test case. Since the number of test files are same for everyone, this is effectively equal to the sum of scores for all the test files. In case it isn't apparent yet, the objective of this problem is to minimize your total score.

### Test Generation

The tests are not randomly generated. Special properties are forced upon the generated array, which may or may not be different for each test case.
