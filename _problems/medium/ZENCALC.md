---
category_name: medium
problem_code: ZENCALC
problem_name: 'Peaceful Calculator'
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
problem_author: kaushik_iska
problem_tester: anton_lunyov
date_added: 21-07-2012
tags:
    - ad
    - kaushik_iska
    - march13
    - medium
    - modulo
editorial_url: 'http://discuss.codechef.com/problems/ZENCALC'
time:
    view_start_date: 1363000575
    submit_start_date: 1363000575
    visible_start_date: 1363000281
    end_date: 1735669800
    current: 1493557958
layout: problem
---
All submissions for this problem are available.In the 1920's a mad scientist by the name Exor invented a notation for evaluating complex mathematical expressions. This notation popularly goes by the name **"Zenfix"** notation. In more formal terms, **Zenfix** expression is an expression which consists of **tokens**. Each **token** is either an operation from the list **{ ! , ^ , / , \* , + , - }** or an integer.

All arithmetic operation here are **32-bit operations**. They are defined through auxiliary unary operation **32-bit residue** as follows (please read this carefully, some definitions are non-standard):

- **32-bit residue of A** is defined as the unique integer **X** in the range **\[-231, 231)** for which the usual difference of **A** and **X** is divisible by **232**.
- **32-bit difference A - B** is defined as a 32-bit residue of the usual difference of **A** and **B**.
- **32-bit sum A + B** is defined as a 32-bit residue of the usual sum of **A** and **B**.
- **32-bit product A \* B** is defined as a 32-bit residue of the usual product of **A** and **B**.
- **32-bit quotient A / B** is defined as the smallest integer **C** in the range **\[-231, 231)** such that **B \* C = A** (note the **B \* C** here is a 32-bit product of **B** and **C**). If no such integer **C** exists then result of division is undefined, which means that error occurs during the calculation.
- **32-bit power A ^ B** is defined as follows. For **B > 0** we define **A ^ B = A \* A \* ... \* A**, where **A** repeats **B** times (here \* is a 32-bit multiplication). For **B = 0** we define **A ^ 0 = 1**. Finally, for **B < 0** we define **A ^ B = 1 / (A ^ (-B))**, where **A ^ (-B)** is defined above (**-B** is the usual negation of **B**) and / is a 32-bit division operation. If result of division here is undefined it means that error occurs during the calculation.
- **32-bit factorial A!** is defined as follows. For **A > 0** we define **A! = 1 \* 2 \* 3 \* ... \* A** (here \* is a 32-bit multiplication). For **A = 0** we define **0! = 1**. Finally, for **A < 0** we define **A! = (-1) \* (-2) \* (-3) \* ... \* A** (here again \* is a 32-bit multiplication and **-X** for **X = 1, 2, 3, ...** means usual negation).

Each operation has its own priority defined by its index in this list: the smaller the index the higher the priority. Therefore,

- the most priority operation is **factorial** (**!**),
- the second most priority operation is **exponentiation** (**^**),
- the third most priority operation is **division** (**/**),
- the fourth most priority operation is **multiplication** (**\***),
- the fifth most priority operation is **addition** (**+**),
- and, finally, the less priority operation is **subtraction** (**-**).

We could abbreviate the list of operations sorted by priority as **FEDMAS** (the first letter of the title of each operation was chosen).

The evaluation of a **Zenfix** expression goes as follows:

1. If expression contains a factorial sign (**!**) followed by an integer then we choose the leftmost such occurrence and perform the factorial operation which will be defined below. Namely, we replace the integer that follows the factorial sign by its factorial value and delete the factorial sign from the expression.
2. Otherwise, if there exists an operation followed by at least 3 integers we at first choose the first operation in **EDMAS** with this property (that is, among operations followed by at least three integers we choose the operation with the highest priority). Then we choose the leftmost occurrence of such a case with this operation and perform calculation. Namely, we replace the operation and two following integers by the result of this operation applied to these integers. If error occurs during this calculation then you should stop evaluation of expression.
3. Otherwise, if there exists an operation followed by exactly 2 integers we proceed exactly as in the previous rule.
4. We repeat the first three steps until we can no longer repeat them or error occurs during some calculation.
5. At the end of this evaluation, if we are left with a single integer, the expression is called correct, otherwise it is called incorrect. In particular, if error occurs during some calculation, the expression is incorrect.

Your task is for the given Zenfix expression check whether it is correct or not by modeling process of its evaluation and output each intermediate calculation that occurs.

### Input

The first line of the input contains an integer **T**, denoting the number of test cases. The first line of each test case contains a single integer **N**, denoting the number of tokens in the expression. The second line contains the expression as the list of **N** space-separated tokens.

### Constraints

- **1** ≤ **T** ≤ **10000**
- **1** ≤ **N** ≤ **1000**
- Each token is either an integer in the range **\[-231, 231)** or a character in the set **{ ! , ^ , / , \* , + , - }**
- The sum of **N** over the input does not exceed **10000**

### Output

For each test case, output the process of evaluation of the expression. Namely, at each step when successful calculation is performed output on a separate line **I O A B C**. Here **I** is the index of the operation in the list of tokens of the current expression (tokens are number starting from 1). **O** is the operation itself (one of the characters in the set **{ ! , ^ , / , \* , + , - }**). **A** and **B** are the operands. In case of a factorial operation (**!**), output **B** as **-1**. **C** is the result of operation **O** applied to numbers **A** and **B** (or only to **A** in case of a factorial operation). After all possible calculations are performed output **"OK"** if the expression is correct, and **"NOT OK"** otherwise.

### Example

<pre>
<b>Input:</b>
4
5
- 5 * 6 7
15
- * / 15 - 7 + 1 1 3 + 2 + 1 1
16
+ 2 3 4 * 1 2 3 4 ^ 6 7 * 5 6 7
21
! -3 + * 167 164 - 257 + 190 ! 6 - / 272 0 ^ 341 12 18 !

<b>Output:</b>
3 * 6 7 42
1 - 5 42 -37
OK
7 + 1 1 2
5 - 7 2 5
3 / 15 5 3
2 * 3 3 9
5 + 1 1 2
3 + 2 2 4
1 - 9 4 5
OK
5 * 1 2 2
11 * 5 6 30
8 ^ 6 7 279936
1 + 2 3 5
NOT OK
1 ! -3 -1 -6
10 ! 6 -1 720
15 ^ 341 12 2062435601
NOT OK

</pre>### Explanation
**Example case 1.**
 The expression is:

`- 5 * 6 7`Considering evaluation rules we see that only the third rule with operation **\*** is applicable.
 So we calculate **\* 6 7**, which is **42**, and replace **\* 6 7** with **42**: `- 5 42`Now we are left with only one operation followed by two integers.
 So we calculate **- 5 42**, which is **-37**, and replace **- 5 42** with **-37**: `-37`We are left with a single integer.
 Therefore, expression is correct and we output **"OK"**. **Example case 2.**
 The expression is:

`- * / 15 - 7 <u><b>+ 1 1</b></u> 3 + 2 + 1 1`The underlined operation will be performed first as it is the only operation followed by at least three integers. So we replace **+ 1 1** with **2**: `- * / 15 <u><b>- 7 2</b></u> 3 + 2 + 1 1`By the same reason as above we replace **- 7 2** with **5**: `- * <u><b>/ 15 5</b></u> 3 + 2 + 1 1`By the same reason as above we replace **/ 15 5** with **3**: `- <u><b>* 3 3</b></u> + 2 + 1 1`Among candidates **\* 3 3** and **+ 1 1**, the \* is performed as it has higher priority.
 So we replace **\* 3 3** with **9**: `- 9 + 2 <u><b>+ 1 1</b></u>`The underlined operation is the only one followed by at least 2 integers.
 So we replace **+ 1 1** with **2**: `- 9 <u><b>+ 2 2</b></u>`By the same reason as above we replace **+ 2 2** with **4**: `- 9 4`Now we are left with only one operation followed by two integers.
 So we replace **- 9 4** with **5**: `5` We are left with a single integer.
 Therefore, expression is correct and we output **"OK"**. **Example case 3.**
 The expression is:

`+ 2 3 4 <u><b>* 1 2</b></u> 3 4 ^ 6 7 * 5 6 7`Among all the operations followed by at least 3 integers, \* has the highest priority.
 As there are more than one such multiplications, we consider the leftmost one, which is underlined.
 So we replace **\* 1 2** with **2**: `+ 2 3 4 2 3 4 ^ 6 7 <u><b>* 5 6</b></u> 7`Similarly as above, among all the operations followed by at least 3 integers, \* has the highest priority.
 So we replace **\* 5 6** with **30**: `+ 2 3 4 2 3 4 <u><b>^ 6 7</b></u> 30 7`Now, among all the operations followed by at least 3 integers, ^ has the highest priority.
 So we replace **^ 6 7** with **279936**: `<u><b>+ 2 3</b></u> 4 2 3 4 279936 30 7`Now, there is only one operation that can be performed.
 So we replace **+ 2 3** with **5**: `5 4 2 3 4 279936 30 7`Now, no evaluation rule can be applied and we stop the evaluation.
 Since we are left with more than one token, the expression is incorrect and we output **"NOT OK"**. **Example case 4.**
 The evaluation proceeds as follows:

<pre>
<u><b>! -3</b></u> + * 167 164 - 257 + 190 ! 6 - / 272 0 ^ 341 12 18 !
-6 + * 167 164 - 257 + 190 <u><b>! 6</b></u> - / 272 0 ^ 341 12 18 !
-6 + * 167 164 - 257 + 190 720 - / 272 0 <u><b>^ 341 12</b></u> 18 !
-6 + * 167 164 - 257 + 190 720 - <u><b>/ 272 0</b></u> 2062435601 18 !
NOT OK

</pre>Here at first two steps the first rule (with factorials) was applied. At the 3rd and the 4th step the 3rd rule was applied.
 Since quotient **272 / 0** is undefined (see the definition) we stop evaluation.
 So the expression is incorrect and we output **"NOT OK"**.
