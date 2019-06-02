---
category_name: easy
problem_code: ALETHIO
problem_name: 'Lyra and the Alethiometer'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: pragrame
problem_tester: tuananh93
date_added: 3-06-2013
tags:
    - ad
    - cook35
    - easy
    - pragrame
editorial_url: 'http://discuss.codechef.com/problems/ALETHIO'
time:
    view_start_date: 1372012200
    submit_start_date: 1372012200
    visible_start_date: 1414769400
    end_date: 1735669800
    current: 1493558211
layout: problem
---
All submissions for this problem are available.Lyra Belacqua is a very gifted girl. She is one of a very small set of people capable of reading an alethiometer, more commonly known as The Golden Compass. It has one specific use: to tell the truth. The name in fact, is derived from "Aletheia" meaning truth, and "-ometer", meaning "measuring device".

The alethiometer had four needles, out of which the user would direct three of them to lie over symbols on the face of the device to ask a question. The fourth needle then swung into action and pointed to various symbols one after another, thus telling the answer.

For this problem, consider the alethiometer consisting of symbols : digits '0'-'**9**' and letters '**A**'-'**Z**'. Learned scholars were debating the age of the Universe, and they requested Lyra to find out the age from the alethiometer. Having asked the question, the fourth needle started spouting out symbols, which Lyra quickly recorded. In that long string of characters, she knows that some substring corresponds to the age of the Universe. She also knows that the alethiometer could have wrongly pointed out atmost one digit (0-9) as a letter (A-Z). She then wonders what is the maximum possible age of the Universe.

Given the set of symbols the alethiometer pointed out, help her find the maximum age of the Universe, which could correspond to a substring of the original string with atmost one letter changed.

**Note:** We consider a substring to be a contiguous part of the string **S** 

Also, the alethiometer wrongly reports only a **letter**. All the **digits** *remain as they are*.

### Input

Each input consists of a single string **S** which is what Lyra recorded from the fourth needle's pointing.

### Output

Output one number, the maximum possible answer.

### Constraints

- **1** ≤ |**S**| ≤ **1,000**
- **S** will only contain digits 0-9 and uppercase Latin letters.

### Example

<pre>
<b>Input1:</b>
06454

<b>Input2:</b>
C0D3C43F

<b>Output1:</b>
6454

<b>Output2:</b>
3943
</pre>
### Explanation

In the first example, there is no choice as to what the number can be. It has to be 6,454.

In the second example, there are a total of 41 possible strings (one for the original, and 10 for changing each letter). You can verify that the maximum number as a substring is got by making the string "C0D3943F".
