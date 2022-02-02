---
category_name: challenge
problem_code: LMATRIX2
problem_name: 'Make It Zero 2'
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
problem_author: ballon_ziq
problem_tester: laycurse
date_added: 9-02-2014
tags:
    - ballon_ziq
    - challenge
    - feb14
editorial_url: 'http://discuss.codechef.com/problems/LMATRIX2'
time:
    view_start_date: 1392629400
    submit_start_date: 1392629400
    visible_start_date: 1392629400
    end_date: 1735669800
    current: 1525454420
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Aleksandra is the most popular girl in the city. Each boy can only dream about dating her. Other girls want to be like her.

Aleksandra is going to find herself a boyfriend. Of course such a beauty needs someone special. That's why she is going to announce a quiz. Even you can try your chances at this. Apart from boys, the girl also loves math. That's why this quiz is going to be mathematical.

She has two matrixes with **N** rows and **M** columns each. Let **Pi,j** and **Ai,j** be the **j**th element of the **i**th row of the first and second matrixes respectively. She likes 0, that's why she is going to get rid of all non zero numbers in the second matrix. In each turn she may choose five integers:

- **1 ≤ x1 ≤ x2 ≤ N**
- **1 ≤ y1 ≤ y2 ≤ M**
- **0 ≤ k ≤ 10000**

and after this, for all pairs **(i,j)** such that:

- **x1 ≤ i ≤ x2**
- **y1 ≤ j ≤ y2**

she does the following:

- **Ai,j = (k + Ai,j) modulo Pi,j**

It takes her a lot of turns to do this. That's why she gives this problem to all boys in the city and promises to go for a date with the one who will solve this task with the fewest number of moves.

It is your chance to walk with such a wonderful girl. Just use it!

### Input

The first line contains two space-separated integers **N** and **M**, denoting the size of the matrix. Then the **i**th line of the next **N** lines contains **M** space-separated integers **Pi,1**, **Pi,2**, ..., **Pi,M**. After matrix **P**, matrix **A** is given in the same format.

### Output

In the first line, print the integer **Q (0 ≤ Q ≤ N \* M)**, denoting the number of the moves for erasing all non zero numbers from the second matrix. In the **i**th line of the next **Q** lines, print **5** space-separated integers **x1**, **y1**, **x2**, **y2**, **k**, denoting the information about submatrix chosen at the **i**th move.

**Note:** Your solution will be judged as *wrong answer* if **Q** is larger then **N\*M**.

### Constraints for the official judge data

- **66 ≤ N, M ≤ 99**
- **1 ≤ Pi,j ≤ 10**
- **0 ≤ Ai,j &lt; Pi,j**

### Example

<pre>
<b>Input:</b>
2 2
1 2
2 3
0 1
1 1

<b>Output:</b>
2
1 1 2 2 1
2 2 2 2 1

</pre>
### Scoring

For each test file, your score is calculated as **100 × Q / (N × M)**. Then the total your score is defined as the average of your score for the test files (see the next paragraph, for more details). The aim for this problem is to minimize the total your score.

We have **40** official test files. You must correctly solve all test files to receive *accepted*. During the contest, the scores of the last **30** test files are 0, that is, the total your score is calculated by only the first **10** tests. After the contest, all solutions will be rescored by the average of the scores of the all **40** test files, and it will be the final score.

### Test generation

In the official test file, **N** and **M** are choosing uniformly and randomly from **\[66, 99\]**. Each **Pi,j** is chosen randomly from **1** to **10** inclusive. Then each **Ai,j** is chosen randomly from **\[0, Pi,j − 1\]**.
