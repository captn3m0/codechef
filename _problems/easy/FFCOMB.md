---
category_name: easy
problem_code: FFCOMB
problem_name: 'FastFood Combos'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: mgch
date_added: 5-10-2016
tags:
    - bits
    - dynamic
    - ltime41
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/FFCOMB'
time:
    view_start_date: 1477760400
    submit_start_date: 1477760400
    visible_start_date: 1477760400
    end_date: 1735669800
    current: 1493558145
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME41/mandarin/FFCOMB.pdf), [Russian](http://www.codechef.com/download/translated/LTIME41/russian/FFCOMB.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME41/vietnamese/FFCOMB.pdf) as well.

Sometimes Sergey visits fast food restaurants. Today he is going to visit the one called PizzaKing.

Sergey wants to buy **N** meals, which he had enumerated by integers from **1** to **N**. He knows that the meal **i** costs **Ci** rubles. He also knows that there are **M** meal sets in the restaurant.

The meal set is basically a set of meals, where you pay **Pj** burles and get **Qj** meals - **Aj, 1**, **Aj, 2**, ..., **Aj, Qj**.

Sergey has noticed that sometimes he can save money by buying the meals in the meal sets instead of buying each one separately. And now he is curious about what is the smallest amount of rubles he needs to spend to have at least one portion of each of the meals.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains a pair of integer numbers **N** and **M** denoting the number of meals and the number of the meal sets.

The second line contains **N** space-separated integers **C1**, **C2**, ..., **CN** denoting the costs of the meals, bought separately.

Each of the following **M** lines starts with a pair of integer numbers **Pi** and **Qi**, denoting the cost of the meal set and the number of meals in it, followed with the integer numbers **Ai, 1 Ai, 2, ..., Ai, Qi** denoting the meal numbers.

### Output

For each test case, output a single line containing the minimal total amount of money Sergey needs to spend in order to have at least one portion of each meal.

### Constraints

- **1 ≤ Pi, Ci ≤ 106**
- **1 ≤ M ≤ min{2N, 2 × 100000}**
- No meal appears in the set twice or more times.
- Subtask 1 (16 points): **1 ≤ T ≤ 103**, **1 ≤ N ≤ 8**
- Subtask 2 (23 points): For each test file, either **1 ≤ T ≤ 10**, **1 ≤ N ≤ 12** or the constraints for Subtask **1** are held.
- Subtask 3 (61 points): For each test file, either **T = 1**, **1 ≤ N ≤ 18** or the constraints for Subtask **1** or **2** are held.

### Example

```
<b>Input:</b>
<tt>1
3 3
3 5 6
11 3 1 2 3
5 2 1 2
5 2 1 3</tt>

<b>Output:</b>
<tt>10</tt>

```
### Explanation

**Example case 1.** If Sergey buys all the meals separately, it would cost him **3 + 5 + 6 = 14** rubles. He can buy all of them at once by buying the first meal set, which costs for **11** rubles, but the optimal strategy would be either to buy the second and the third meal set, thus, paying **5 + 5 = 10** rubles, or to buy the third meal set and the second meal separately by paying the same amount of **10** rubles.