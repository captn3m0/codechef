---
category_name: easy
problem_code: LUCKY10
problem_name: 'Little Elephant and Order'
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
problem_author: witua
problem_tester: null
date_added: 17-02-2012
tags:
    - easy
    - greedy
    - oct12
    - witua
time:
    view_start_date: 1350293400
    submit_start_date: 1350293400
    visible_start_date: 1350293400
    end_date: 1735669800
    current: 1493558164
layout: problem
---
All submissions for this problem are available.The Little Elephant loves lucky strings. Everybody knows that the lucky string is a string of digits that contains only the lucky digits **4** and **7**. For example, strings **"47"**, **"744"**, **"4"** are lucky while **"5"**, **"17"**, **"467"** are not.

The Little Elephant has the strings **A** and **B** of digits. These strings are of equal lengths, that is **|A|** = **|B|**. He wants to get some lucky string from them. For this he performs the following operations. At first he arbitrary reorders digits of **A**. Then he arbitrary reorders digits of **B**. After that he creates the string **C** such that its **i**-th digit is the maximum between the **i**-th digit of **A** and the **i**-th digit of **B**. In other words, **C**\[**i**\] = **max**{**A**\[**i**\], **B**\[**i**\]} for **i** from **1** to |**A**|. After that he removes from **C** all non-lucky digits saving the order of the remaining (lucky) digits. So **C** now becomes a lucky string. For example, if after reordering **A = "754"** and **B = "873"**, then **C** is at first **"874"** and then it becomes **"74"**.

The Little Elephant wants the resulting string to be as lucky as possible. The formal definition of this is that the resulting string should be the lexicographically greatest possible string among all the strings that can be obtained from the given strings **A** and **B** by the described process.

**Notes**- **|A|** denotes the length of the string **A**.
- **A**\[**i**\] denotes the **i**-th digit of the string **A**. Here we numerate the digits starting from **1**. So **1** ≤ **i** ≤ |**A**|.
- The string **A** is called lexicographically greater than the string **B** if either there exists some index **i** such that **A\[i\] &gt; B\[i\]** and for each **j &lt; i** we have **A\[j\] = B\[j\]**, or **B** is a proper prefix of **A**, that is, |**A**| &gt; |**B**| and first |**B**| digits of **A** coincide with the corresponding digits of **B**.

### Input

The first line of the input contains a single integer **T**, the number of test cases. **T** test cases follow. Each test case consists of two lines. The first line contains the string **A**. The second line contains the string **B**.

### Output

For each test case output a single line containing the answer for the corresponding test case. Note, that the answer can be an empty string. In this case you should print an empty line for the corresponding test case.

### Constraints

**1** ≤ **T** ≤ **10000**
**1** ≤ **|A|** ≤ **20000**
|**A**| = |**B**|
Each character of **A** and **B** is a digit.
Sum of |**A**| across all the tests in the input does not exceed **200000**.

### Example

<pre>
<b>Input:</b>
4
4
7
435
479
7
8
1675475
9756417

<b>Output:</b>
7
74

777744
</pre>
### Explanation

**Case 1.** In this case the only possible string **C** we can get is **"7"** and it is the lucky string.

**Case 2.** If we reorder **A** and **B** as **A = "543"** and **B = "749"** the string **C** will be at first **"749"** and then becomes **"74"**. It can be shown that this is the lexicographically greatest string for the given **A** and **B**.

**Case 3.** In this case the only possible string **C** we can get is **"8"** and it becomes and empty string after removing of non-lucky digits.

**Case 4.** If we reorder **A** and **B** as **A = "7765541"** and **B = "5697714"** the string **C** will be at first **"7797744"** and then becomes **"777744"**. Note that we can construct any lexicographically greater string for the given **A** and **B** since we have only four "sevens" and two "fours" among digits of both strings **A** and **B** as well the constructed string **"777744"**.
