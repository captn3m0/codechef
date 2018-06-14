---
category_name: medium
problem_code: AMLEX
problem_name: 'Poetic word'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: balajiganapath
problem_tester: null
date_added: 26-12-2017
tags:
    - balajiganapath
time:
    view_start_date: 1517693400
    submit_start_date: 1517693400
    visible_start_date: 1517693400
    end_date: 1735669800
    current: 1525454396
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Dhinwaji is an acclaimed poet and likes to play with words and letters. He has bought some stickers where each sticker has a lower case english letter (a-z). The letters are indexed from 1 - 26 i.e. a has index 1, b has index 2 and so on. He has **ai** stickers with letter _i_ on it. He needs to create a new word having exactly **n** letters. Being a programmer, Dhinwaji imposed another constraint: a letter with index _j_ can only be placed at position _i_ in the word if _i % j_ = 0 i.e. _i_ should be a multiple of _j_. Note that everything is 1-indexed. Note also that not all the stickers need to be used.

Dhinwaji wonders what is the lexicographically smallest word he can create that follows the above constraints. Since he is too busy writing poems, you have to help him find this word. Note that it is possible that there is no valid word of **n** letters that can be formed.

### Input

- The first line will have a number **T** indicating the number of test cases. **T** lines follow.
- The first line of each test case will have one integer, **n**, denoting the required length of the new word.
- The second line of each test case will have 26 space separated integers **a1**, **a2**, ..., **a26**

### Output

- For each test case, print one line containing the lexicographically smallest word which satisfies the conditions. If no such word is possible, print "#rekt" without the quotes.

### Constraints

- 1 ≤ **T** ≤ 5
- 1 ≤ **n** ≤ 200
- 0 ≤ **ai** ≤ **n**

### Example

<pre>
<b>Input:</b>
3
3
1 1 1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0  
6
3 2 1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0  
10
1 1 1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0  

<b>Output:</b>
abc
aacbab
#rekt
</pre>### Explanation

**Testcase 1:** There is 1 sticker with a, b and c each. "abc" is the only valid word possible

**Testcase 2:** Some valid words are "abcaab", "abcbaa", "ababac" etc. The lexicographically smallest among them is aacbab

**Testcase 3:** There are a total of 3 letters so a word with 10 letters cannot be formed
