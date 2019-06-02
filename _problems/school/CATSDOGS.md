---
category_name: school
problem_code: CATSDOGS
problem_name: 'Cats and Dogs'
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
problem_tester: iscsi
date_added: 11-04-2016
tags:
    - ad
    - admin2
    - cakewalk
    - jan17
editorial_url: 'https://discuss.codechef.com/problems/CATSDOGS'
time:
    view_start_date: 1484731800
    submit_start_date: 1484731800
    visible_start_date: 1484731800
    end_date: 1735669800
    current: 1492506713
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JAN17/mandarin/CATSDOGS.pdf), [Russian](http://www.codechef.com/download/translated/JAN17/russian/CATSDOGS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JAN17/vietnamese/CATSDOGS.pdf) as well.

Chef is a farmer and a pet lover. He has a lot of his favorite pets cats and dogs in the barn. He does not know their exact count. But he knows that there are **C** cats and **D** dogs in the barn. Also, one day went to field and found that there were **L** legs of the animals touching the ground. Chef knows that cats love to ride on the dogs. So, they might ride on the dogs, and their legs won't touch the ground and Chef would miss counting their legs. Chef's dogs are strong enough to ride at max two cats on their back.

It was a cold foggy morning, when Chef did this counting. So he is now wondering whether he counted the legs properly or not. Specifically, he is wondering is there a some possibility of his counting being correct. Please help Chef in finding it.

### Input

First line of the input contains an integer **T** denoting number of test cases. **T** test cases follow.

The only line of each test case contains three space separated integers **C, D, L** denoting number of the cats, number of the dogs and number of legs of animals counted by Chef, respectively.

### Output

For each test case, output a single line containing a string "yes" or "no" (both without quotes) according to the situation.

### Constraints

- **1 ≤ T ≤ 105**
- **0 ≤ C, D, L ≤ 109**

### Subtasks

**Subtask #1 (20 points)**

- **1 ≤ T ≤ 104**
- **0 ≤ C, D ≤ 102**

**Subtask #2 (30 points)**

- **1 ≤ T ≤ 105**
- **0 ≤ C, D ≤ 103**

**Subtask #3 (50 points)**

- Original constraints

### Example

<pre><b>Input:</b>
3
1 1 8
1 1 4
1 1 2

<b>Output:</b>
yes
yes
no
</pre>
### Explanation

**Example 1.** There is one cat and one dog. The number of legs of these animals on the ground are 8, it can be possible when both cat and dog are standing on the ground.

**Example 2.** There is one cat and one dog. The number of legs of these animals on the ground are 4, it can be possible if the cat will ride on the dog, so its legs won't be counted by Chef, only the dog's legs will be counted.

**Example 3.** There is one cat and one dog. The number of legs of these animals are 2, it can not be true at all, Chef might have made some mistake. Hence answer is "no".
