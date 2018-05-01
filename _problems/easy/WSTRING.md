---
category_name: easy
problem_code: WSTRING
problem_name: 'W String'
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
problem_author: jay_adm
problem_tester: tuananh93
date_added: 27-04-2013
tags:
    - dynamic
    - easy
    - jay_adm
    - june13
editorial_url: 'http://discuss.codechef.com/problems/WSTRING'
time:
    view_start_date: 1371462339
    submit_start_date: 1371462339
    visible_start_date: 1371460885
    end_date: 1735669800
    current: 1493558197
layout: problem
---
All submissions for this problem are available.Kira likes to play with strings very much. Moreover he likes the shape of 'W' very much. He takes a string and try to make a 'W' shape out of it such that each angular point is a '#' character and each sides has same characters. He calls them _W strings_.

For example, the _W string_ can be formed from "aaaaa#bb#cc#dddd" such as:

<pre><pre class="text-monospace" style="font-family: Courier, 'Courier New', monospace">
    a
     a             d
      a     #     d
       a   b c   d
        a b   c d
         #     #
</pre>He also call the strings which can generate a 'W' shape (satisfying the above conditions) _W strings_.

More formally, a string **S** is a _W string_ if and only if it satisfies the following conditions (some terms and notations are explained in **Note**, please see it if you cannot understand):

- The string **S** contains **exactly** **3** '#' characters. Let the indexes of all '#' be **P1 < P2 < P3** (indexes are 0-origin).
- Each substring of **S\[0, P1−1\], S\[P1+1, P2−1\], S\[P2+1, P3−1\], S\[P3+1, |S|−1\]** contains exactly one kind of characters, where **S\[a, b\]** denotes the non-empty substring from **a+1**th character to **b+1**th character, and **|S|** denotes the length of string **S** (See **Note** for details).

Now, his friend Ryuk gives him a string **S** and asks him to find the length of the longest _W string_ which is a subsequence of **S**, with only one condition that there must not be any '#' symbols between the positions of the first and the second '#' symbol he chooses, nor between the second and the third (here the "positions" we are looking at are in **S**), i.e. suppose the index of the '#'s he chooses to make the _W string_ are **P1, P2, P3** (in increasing order) in the original string **S**, then there must be no index **i** such that **S\[i\]** = '#' where **P1 < i < P2 or P2 < i < P3**.

Help Kira and he won't write your name in the **Death Note**.

**Note**:

For a given string **S**, let **S\[k\]** denote the **k+1**th character of string **S**, and let the index of the character **S\[k\]** be **k**. Let **|S|** denote the length of the string **S**. And a substring of a string **S** is a string **S\[a, b\] = S\[a\] S\[a+1\] ... S\[b\]**, where **0 ≤ a ≤ b < |S|**. And a subsequence of a string **S** is a string **S\[i0\] S\[i1\] ... S\[in−1\]**, where **0 ≤ i0 < i1 < ... < in−1 < |S|**.

For example, let **S** be the string "kira", then **S\[0\]** = 'k', **S\[1\]** = 'i', **S\[3\]** = 'a', and **|S| = 4**. All of **S\[0, 2\]** = "kir", **S\[1, 1\]** = "i", and **S\[0, 3\]** = "kira" are substrings of **S**, but "ik", "kr", and "arik" are not. All of "k", "kr", "kira", "kia" are subsequences of **S**, but "ik", "kk" are not.

From the above definition of _W string_, for example, "a#b#c#d", "aaa#yyy#aaa#yy", and "o#oo#ooo#oooo" are _W string_, but "a#b#c#d#e", "#a#a#a", and "aa##a#a" are not.

### Input

First line of input contains an integer **T**, denoting the number of test cases. Then **T** lines follow. Each line contains a string **S**.

### Output

Output an integer, denoting the length of the longest _W string_ as explained before. If **S** has no _W string_ as its subsequence, then output 0.

### Constraints

- **1 ≤ T ≤ 100**
- **1 ≤ |S| ≤ 10000 (104)**
- **S** contains no characters other than lower English characters ('a' to 'z') and '#' (without quotes)

### Example

<pre>
<b>Input:</b>
3
aaaaa#bb#cc#dddd
acb#aab#bab#accba
abc#dda#bb#bb#aca

<b>Output:</b>
16
10
11
</pre>### Explanation

In the first case: the whole string forms a _W String_.

In the second case: acb#aab#bab#accba, the longest _W string_ is ac**b#aa**b**\#b**a**b#a**ccb**a**

In the third case: abc#dda#bb#bb#aca, note that even though **a**bc**\#dd**a**\#bb**\#**bb#a**c**a** (boldened characters form the subsequence) is a _W string_ of length **12**, it violates Ryuk's condition that there should not be any #'s inbetween the **3** chosen # positions. One correct string of length **11** is **a**bc#dd**a#bb#bb#a**c**a**
