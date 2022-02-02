---
{"category_name":"easy","problem_code":"REBIT","problem_name":"Ready Bitwise","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"\r\n2\r\n#\r\n(#\u0026#)\r\n","output":"748683265 748683265 748683265 748683265\r\n436731905 935854081 811073537 811073537","explanation":"**Example case 1:** The probabilities that the value of the expression is \u00270\u0027, \u00271\u0027, \u0027a\u0027 or \u0027A\u0027 are all equal to $1/4$.\r\n\r\n**Example case 2:** There can be total 16 different expressions. Out of which :\r\n\r\nFor : (1\u00261)  ---\u0026gt; $G_0 = G_1 = 1$, Probability for 1 = $1/16$ \r\n\r\n(a\u00261) , (1\u0026a) , (a\u0026a) ---\u0026gt; $G_0 = 0$ and $G_1 = 1$, Probability for \u0027a\u0027 = $3/16$ \r\n\r\n(A\u00261) , (1\u0026A) , (A\u0026A) ----\u0026gt; $G_0 = 1$ and $G_1 = 0$, Probability for \u0027A\u0027 = $3/16$\r\n\r\nRest all expressions have $G_0 = G_1 = 0$, Probability for \u00270\u0027 = $9/16$ \r\n\r\nProbability are expressed as mentioned in Problem Statement.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"krikti","problem_tester":null,"date_added":"17-01-2020","tags":{"0":"april20","1":"easy","2":"implementation","3":"krikti","4":"probability","5":"taran_1407"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/REBIT","time":{"view_start_date":1586779202,"submit_start_date":1586779202,"visible_start_date":1586779202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=REBIT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/APRIL20/hindi/REBIT.pdf), [Bengali](https://www.codechef.com/download/translated/APRIL20/bengali/REBIT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/APRIL20/mandarin/REBIT.pdf), [Russian](https://www.codechef.com/download/translated/APRIL20/russian/REBIT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/APRIL20/vietnamese/REBIT.pdf) as well.

Yukti found a strange paper with a Boolean expression written on it. Unfortunately, all the operands were missing from this expression. Being an innovative person, Yukti immediately created a riddle for her students based on this incomplete expression.

The students are given a string $L$ describing a valid Boolean expression, where each operand (value) is replaced by the character '#'. A valid expression is defined as one of the following:
- A single term '#'.
- A string in the format "([expression1][operator][expression2])", where [expression1] and [expression2] are valid expressions and [operator] is one of the characters '&', '|' and '^' (denoting bitwise AND, OR and XOR respectively).

Each of the characters '#' in the string $L$ should be replaced by one of the characters '0', '1', 'a' and 'A', uniformly randomly and independently. Then, the resulting expression is evaluated as follows:
- A Boolean value $a$ ($0$ or $1$) is chosen. Each occurrence of the character 'a' is interpreted as this value and each occurrence of 'A' is interpreted as its negation ($1-a$). The characters '0' and '1' are interpreted as the Boolean values $0$ and $1$ respectively.
- Since there are two possible values of $a$, we obtain two constant Boolean expressions this way. Let's denote them by $G_0$ (when $a$ = 0) and $G_1$ (when $a$ = 1). 
- Let's evaluate $G_0$ and $G_1$.
    - If $G_0 = G_1 = 0$, the value of the expression is '0'.
    - If $G_0 = G_1 = 1$, the value of the expression is '1'.
    - If $G_0 = 0$ and $G_1 = 1$, the value of the expression is 'a'.
    - If $G_0 = 1$ and $G_1 = 0$, the value of the expression is 'A'.

Can you find the probabilities with which the expression obtained after substituting for each character '#' evaluates to these values? It can be proved that for each of these values, the probability can be expressed as a fraction $\frac{P}{Q}$, where $P$ and $Q$ are integers ($P \ge 0$, $Q \gt 0$) and $Q$ is coprime with $998,244,353$. You should compute $P \cdot Q^{-1}$ modulo $998,244,353$ for each of these values.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single string $L$.

### Output
For each test case, print a single line containing four space-separated integers ― the answers corresponding to the probabilities that the value of the Boolean expression is '0', '1', 'a' or 'A' respectively.

### Constraints
- $1 \le T \le 600$
- $1 \le |L| \le 100,000$
- $L$ contains only characters '#', '(', ')', '&', '|' and '^'
- the sum of $|L|$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (30 points):** $|L| \le 300$

**Subtask #2 (70 points):** original constraints

### Example Input
<pre>
2
#
(#&#)
</pre>

### Example Output
```
748683265 748683265 748683265 748683265
436731905 935854081 811073537 811073537
```

### Explanation
**Example case 1:** The probabilities that the value of the expression is '0', '1', 'a' or 'A' are all equal to $1/4$.

**Example case 2:** There can be total 16 different expressions. Out of which :

For : (1&1)  ---&gt; $G_0 = G_1 = 1$, Probability for 1 = $1/16$ 

(a&1) , (1&a) , (a&a) ---&gt; $G_0 = 0$ and $G_1 = 1$, Probability for 'a' = $3/16$ 

(A&1) , (1&A) , (A&A) ----&gt; $G_0 = 1$ and $G_1 = 0$, Probability for 'A' = $3/16$

Rest all expressions have $G_0 = G_1 = 0$, Probability for '0' = $9/16$ 

Probability are expressed as mentioned in Problem Statement.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>