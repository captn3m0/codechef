---
category_name: medium
problem_code: CHEFKLCS
problem_name: 'Chef and LCS'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.4'
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: null
date_added: 9-12-2015
tags:
    - cook65
    - dp
    - dynamic
    - lcs
    - medium
    - mgch
editorial_url: 'http://discuss.codechef.com/problems/CHEFKLCS'
time:
    view_start_date: 1450636200
    submit_start_date: 1450636200
    visible_start_date: 1450636200
    end_date: 1735669800
    current: 1493557535
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK65/mandarin/CHEFKLCS.pdf), [Russian](http://www.codechef.com/download/translated/COOK65/russian/CHEFKLCS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK65/vietnamese/CHEFKLCS.pdf) as well.

Recently, Chef learned how to solve the [Longest common subsequence](https://en.wikipedia.org/wiki/Longest_common_subsequence_problem) problem. Being a fan of [Ekta Kapoor](https://en.wikipedia.org/wiki/Ekta_Kapoor)1, he really likes problems which require finding something **k**th. Please help him solve one such problem he encountered.

Chef wants to know the lexicographically **k**th longest common subsequence of any two given strings **A** and **B**. In other words, let **L** be the length of LCS(**A**, **B**), **S** be the sorted **set** of all common sequences of **A** and **B** with length **L**, you should find **Sk**. Keep in mind that all elements of a [set](https://en.wikipedia.org/wiki/Set_(mathematics)) are **distinct**.

### Input

The first line of input contains two integers **n** and **k**. The second line contains the string **A**, and the third contains the string **B**. Lengths of both **A** and **B** equal **n**. ### Output

Output lexicographically **k**th longest common subsequence. If such a sequence doesn't exist, output **-1**. ### Constraints

- 1 ≤ **n** ≤ 1000
- 1 ≤ **k** ≤ 109
- Each character of **A** and **B** is a lowercase Latin letter.

### Example

<pre>
<b>Input:</b>
<tt>3 3
abc
cba
</tt>
<b>Output:</b>
<tt>c
</tt>

<b>Input:</b>
<tt>5 5
abcba
bacab
</tt>
<b>Output:</b>
<tt>-1</tt>


<b>Input:</b>
<tt>2 2
aa
ab
</tt>
<b>Output:</b>
<tt>-1</tt>
</pre>
### Explanation:

**Example case 1.**L = LCS(**A**, **B**) = 1. There are three common sequences with length L, S = {"a", "b", "c"}. Answer is "c".

**Example case 2.**L = LCS(**A**, **B**) = 3. There are four common sequences with length L, S = {"aca", "acb", "bca", "bcb"}. Answer is "-1".

**Example case 3.**L = LCS(**A**, **B**) = 1. There is only one distinct common sequence with length L, S = {"a"}. Answer is "-1".

**Note:** 1Chef is not really a fan of Ekta Kapoor.
