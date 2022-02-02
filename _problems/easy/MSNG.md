---
{"category_name":"easy","problem_code":"MSNG","problem_name":"Missing Number","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n3\r\n-1 10000\r\n8 20\r\n-1 16\r\n3\r\n-1 10100\r\n-1 5A\r\n-1 1011010","output":"16\r\n90","explanation":"**Example case 1:**\r\n- $(10000)$ in base $2$ is $16$ in base $10$\r\n- $(20)$ in base $8$ is $16$ in base $10$\r\n- $(16)$ in base $10$ is $16$ in base $10$\r\n\r\n**Example case 2:**\r\n- $(10100)_3 = (90)_{10}$\r\n- $(5\\mathrm{A})_{16} = (90)_{10}$\r\n- $(1011010)_2 = (90)_{10}$","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"jarvisnaharoy","problem_tester":null,"date_added":"16-07-2019","tags":{"0":"jarvisnaharoy","1":"oct19","2":"r_64","3":"simple","4":"type"},"problem_difficulty_level":"Simple","best_tag":"Type Conversion","editorial_url":"https://discuss.codechef.com/problems/MSNG","time":{"view_start_date":1571045400,"submit_start_date":1571045400,"visible_start_date":1571045400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MSNG","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/OCT19/hindi/MSNG.pdf), [Bengali](https://www.codechef.com/download/translated/OCT19/bengali/MSNG.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/OCT19/mandarin/MSNG.pdf), [Russian](https://www.codechef.com/download/translated/OCT19/russian/MSNG.pdf), and [Vietnamese](https://www.codechef.com/download/translated/OCT19/vietnamese/MSNG.pdf) as well.

Archaeologist John and his team have unearthed the remains of an ancient civilisation. The partially destroyed walls of its houses contain strange pairs of numbers. John assumes that the first number in each pair always corresponds to a base (itself written in base $10$) and the second number in that pair is written in this base ― for example, `3 2110` denotes $(2110)_3 = 2 \cdot 3^3 + 1 \cdot 3^2 + 1 \cdot 3 + 0 = 66$.

Unfortunately, the first number (the base) is often lost or unreadable. John made a list of pairs of numbers found on the walls, where he represents lost bases by $-1$. For example:
```
-1 10001
3 2110
-1 18565
```

John is wondering if all these pairs of numbers could represent a single common number ― that is, if it is possible to choose some number $X$ in decimal representation (in base $10$) and fill in all missing bases in such a way that the second numbers in all pairs written on the walls, when converted from their bases to base $10$, are equal to $X$. For each pair with a missing base $(-1, Y)$, we may choose any integer base $B$ such that $2 \le B \le 36$ and $Y$ is a valid number in base $B$.

Since John does not want to deal with huge numbers, he considers $X \gt 10^{12}$ to be invalid. Still, there are too many possibilities, so he needs your help. Your task is to find the smallest common number $X$ that satisfies all conditions, or determine that no such common number exists.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- Each of the following $N$ lines contains an integer $B$ followed by a space and a string $Y$, describing a pair of numbers found on the walls; in the string $Y$, digits $10$ through $35$ (in base $10$) are represented by letters 'A' through 'Z'.

### Output
For each test case, print a single line containing one integer ― the smallest possible common number $X$, or $-1$ if there is no valid common number.

### Constraints
- $1 \le T \le 200$
- $1 \le N \le 100$
- $2 \le B \le 36$ or $B = -1$
- $Y$ contains only digits '0' through '9' and letters 'A' through 'Z'
- for each pair $(B, Y)$ on the input, if $B \neq -1$, $Y$ is a valid number in base $B$
- the length of string $Y$ is at most $40$

### Subtasks
**Subtask #1 (30 points):** there is at least one pair $(B, Y)$ such that $B \neq -1$

**Subtask #2 (70 points):** original constraints

### Example Input
```
2
3
-1 10000
8 20
-1 16
3
-1 10100
-1 5A
-1 1011010
```

### Example Output
```
16
90
```

### Explanation
**Example case 1:**
- $(10000)$ in base $2$ is $16$ in base $10$
- $(20)$ in base $8$ is $16$ in base $10$
- $(16)$ in base $10$ is $16$ in base $10$

**Example case 2:**
- $(10100)_3 = (90)_{10}$
- $(5\mathrm{A})_{16} = (90)_{10}$
- $(1011010)_2 = (90)_{10}$

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>