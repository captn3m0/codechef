---
category_name: hard
problem_code: COOLNUM
problem_name: 'Cool Numbers'
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
max_timelimit: '8'
source_sizelimit: '30000'
problem_author: 'iscsi '
problem_tester: anton_lunyov
date_added: 18-04-2012
tags:
    - hard
    - iscsi
    - june12
    - prime
editorial_url: 'http://discuss.codechef.com/problems/COOLNUM'
time:
    view_start_date: 1339403579
    submit_start_date: 1339403579
    visible_start_date: 1339407000
    end_date: 1735669800
    current: 1493556669
layout: problem
---
All submissions for this problem are available.Consider a positive integer **N**. Denote its decimal digits by **X1**, **X2**,..., **XK**. **N** is called a **Cool Number** if you can select at most three (but at least one) of its digits such that the following number is divisible by **N**: (**X1** + **X2** + ... + **XK** – **S**)**S**where **S** is the sum of the selected digits.

Let **LC(N)** be the largest Cool Number which is not greater than **N**, and **UC(N)** be the smallest Cool Number which is greater than **N**. So the following inequalities hold **LC(N)** ≤ **N** &lt; **UC(N)**.

Your task is to find for the given positive integer **N** the values of **LC(N)** and **UC(N)**. As you will see from the examples **LC(N)** and **UC(N)** exist for every positive integer **N**.

Consider some examples.

- **1458** is a Cool Number since ((**1** + **4** + **5** + **8**) – (**1** + **5**))**1** + **5** = **126** = **2985984** is divisible by **1458**. Note that here we select two digits: **1** and **5**.
- All numbers of the form **10n** (**n** = 0, **1**, **2**, ...) are Cool. Indeed, if we select just one digit **1** (the first digit of **10n**) in the definition of Cool Number we obtain the number (**1** + 0 + ... + 0 – **1**)**1** = **01** = 0 and it is divisible by **10n** (recall that 0 is divisible by every positive integer). Now consider some positive integer **N** of **n** digits. Then, clearly, **10n-1** ≤ **N** &lt; **10n** where both **10n-1** and **10n** are Cool Numbers. Hence **LC(N)** and **UC(N)** always exist and, moreover, **LC(N)** ≥ **10n-1** and **UC(N)** ≤ **10n**.

### Input

The first line of the input file contains an integer **T**, the number of test cases. Each of the following **T** lines contains a positive integer **N**.

### Output

For each test case output on a single line values of **LC(N)** and **UC(N)** separated by a single space.

### Constraints 

**1** ≤ **T** ≤ **100000**

**1** ≤ **N** ≤ **101000**

The total number of digits in all numbers **N** in the input file does not exceed **4000000**.

### Example

<pre>
<b>Input:</b>
4
2
999
1459
18898888

<b>Output:</b>
2 3
999 1000
1458 1460
18895680 18900000
</pre>
### Explanation

**Case 1.** The number **2** is the largest integer which is not greater than **N = 2**, the number **3** is the smallest integer which is greater than **N = 2**, and they both are Cool Numbers, which can be shown similar to the case of **10n** in the example above.

**Case 2.** It is very similar to the first test case and we already know that **1000** is a Cool Number. So we just have to show that **999** is a Cool number. But it is clear, since we can select all the three digits so ((**9** + **9** + **9**) – (**9** + **9** + **9**))**9** + **9** + **9** = **027** = 0 which is divisible by **999**.

**Unfortunately, we can't provide you with the explanation of the third and the fourth test cases. You should figure it out by yourself. Please, don't ask about this in comments.**

### Warning!

**There are large input and output files in this problem. Make sure you use fast enough I/O methods.**
