---
category_name: easy
problem_code: ERROR
problem_name: 'Chef and Feedback'
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: viv001
problem_tester: null
date_added: 11-12-2013
tags:
    - cakewalk
    - jan14
    - programming
    - viv001
editorial_url: 'http://discuss.codechef.com/problems/ERROR'
time:
    view_start_date: 1389605400
    submit_start_date: 1389605400
    visible_start_date: 1389605400
    end_date: 1735669800
    current: 1493558143
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JAN14/mandarin/ERROR.pdf) and [Russian](http://www.codechef.com/download/translated/JAN14/russian/ERROR.pdf).

 Lots of geeky customers visit our chef's restaurant everyday. So, when asked to fill the feedback form, these customers represent the feedback using a binary string (i.e a string that contains only characters **'0'** and **'1'**.

Now since chef is not that great in deciphering binary strings, he has decided the following criteria to classify the feedback as **Good** or **Bad** : 

/>/>

If the string contains the substring **"010"** or **"101"**, then the feedback is **Good**, else it is **Bad**. Note that, to be **Good** it is not necessary to have both of them as substring.
 
/>/>

 So given some binary strings, you need to output whether according to the chef, the strings are **Good** or **Bad**.

### Input

 The first line contains an integer **T** denoting the number of feedbacks. Each of the next **T** lines contains a string composed of only **'0'**  and **'1'**.

### Output

 For every test case, print in a single line **Good** or **Bad** as per the Chef's method of classification.

### Constraints

- **1** ≤ **T** ≤  **100**
- **1**  ≤  **|S|**  ≤  **105**



Sum of length of all strings in one test file will not exceed **6\*106**.

/>/>

### Example

<pre><b>Input:</b>
2
11111110
10101010101010
<br></br>
<b>Output:</b>
Bad
Good
<br></br>
/>/>
</pre>### Explanation
**Example case 1.**

The string doesn't contain **010** or **101** as substrings. />

**Example case 2.**

The string contains both **010** and **101** as substrings. />
