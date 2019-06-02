---
category_name: school
problem_code: CHEFCHR
problem_name: 'Chef And His Characters'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: shivam010
problem_tester: r_64
date_added: 18-01-2018
tags:
    - cakewalk
    - feb18
    - shivam010
editorial_url: 'https://discuss.codechef.com/problems/CHEFCHR'
time:
    view_start_date: 1518427800
    submit_start_date: 1518427800
    visible_start_date: 1518427800
    end_date: 1735669800
    current: 1525198874
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/FEB18/mandarin/CHEFCHR.pdf), [Russian](http://www.codechef.com/download/translated/FEB18/russian/CHEFCHR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/FEB18/vietnamese/CHEFCHR.pdf) as well.

Chef was reading a book. He decided to highlight all the lovely sentences of the book. He calls a sentence a *lovely* sentence if, after removing all the non-alphabetical characters (like punctuation and spaces) from it and converting all uppercase letters to lowercase, it is possible to choose **four contiguous characters** from the sentence and reorder them to create the string “chef”.

Chef has almost completed the highlighting work, only a few sentences are left to be checked and highlighted. Now, he wants your help in checking the remaining sentences, as he has to help his mother in the kitchen.

Each sentence **s** has already been preprocessed — all non-alphabetical characters have been erased and all remaining uppercase characters converted to lowercase. You should determine whether **s** is a lovely sentence or not. If it is a lovely sentence, then Chef is also interested in the number of possible ways to select 4 contiguous characters that can be reordered to give his name (the string "chef").

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first and only line of each test case contains a single string **s**, denoting a preprocessed sentence.

### Output

- For each test case, print a single line.
- If the string **s** is not a lovely string, this line should contain a single string “normal” (without quotes).
- Otherwise, it should contain the string ”lovely” (without quotes) followed by one integer — the number of ways to select the four contiguous characters.

### Constraints

- 1 ≤ **T** ≤ 200,000
- 1 ≤ **|s|** ≤ 500,000
- sum of **|s|** for all test cases ≤ 2,000,000
- **s** contains only lowercase English letters

### Subtasks

**Subtask #1 (20 points):** 1 ≤ **|s|** ≤ 2000

**Subtask #2 (80 points):** original constraints

### Example

<pre>
<b>Input:</b>

5
ifchefisgoodforchess
fehcaskchefechohisvoice
hecfisaniceperson
letscallchefthefch
chooseaprogrammer

<b>Output:</b>

lovely 2
lovely 3
lovely 1
lovely 3
normal
</pre>
### Explanation

**Example case 1:** We can select “fche” (the substring starting at index 2) or “chef” (index 3).

**Example case 2:** We can select “fehc” (index 1), “chef” (index 8) or “fech” (index 11).

**Example case 3:** We can only select “hecf” (index 1).

**Example case 4:** We can select “chef” (index 9), “hefc” (index 14), or “efch” (index 15).

**Example case 5:** No four contiguous characters can be reordered to form Chef's name.
