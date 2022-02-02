---
{"category_name":"easy","problem_code":"GUESSPRM","problem_name":"Guess the Prime!","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"bohdan","problem_tester":null,"date_added":"11-05-2019","tags":{"0":"bohdan","1":"chinese","2":"easy","3":"factorization","4":"july19","5":"long","6":"math","7":"number"},"problem_difficulty_level":"Easy-Medium","best_tag":"Number Theory","editorial_url":"https://discuss.codechef.com/problems/GUESSPRM","time":{"view_start_date":1563183002,"submit_start_date":1563183002,"visible_start_date":1563183002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GUESSPRM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JULY19/hindi/GUESSPRM.pdf), [Bengali](https://www.codechef.com/download/translated/JULY19/bengali/GUESSPRM.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY19/mandarin/GUESSPRM.pdf), [Russian](https://www.codechef.com/download/translated/JULY19/russian/GUESSPRM.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JULY19/vietnamese/GUESSPRM.pdf) as well.

**This is an interactive problem.**

Shef chose some prime number $P$ between $2$ and $10^9$ inclusive. You want to guess it.

Before that, you may ask Shef at most $M$ questions, since he is quite busy. In each question, you tell Shef an integer $x$ ($1 \le x \le 10^9$) and Shef tells you $x^2$ modulo $P$. At the end, you guess Shef's prime $P$ and he tells you if your guess was correct.

However, Shef will sometimes cheat: he can change his prime any number of times during the game (even after you tell him your guess), but only in such a way that all his answers to your previous questions remain correct.

Show Shef that you can always guess the correct prime, even if he tries to cheat!

### Interaction
- First, you should read a line containing a single integer $T$ denoting the number of test cases. The description of interaction for $T$ test cases follows.
- For each test case, you should start by asking questions (possibly none).
    - To ask a question, print a line containing two space-separated integers $1$ and $x$.
    - Then, you must read a line containing a single integer.
    - If this integer is $-1$, your query was invalid or you asked too many queries, and you should immediately terminate your program to receive the Wrong Answer verdict. Otherwise, you may receive any verdict.
    - Otherwise, this integer denotes Shef's answer to your query.
- When you think you know Shef's prime $P$, print a line containing two space-separated integers $2$ and $P$.
- Then, you must read a line containing a single string `"Yes"` or `"No"`. If this string is `"Yes"`, you should continue solving the remaining test cases. Otherwise, your answer was incorrect and you should immediately terminate your program to receive the Wrong Answer verdict.

Don't forget to flush the output after printing each line!

### Constraints
- $1 \le T \le 1,000$
- $1 \le x \le 10^9$

### Subtasks
**Subtask #1 (10 points):**
- $M = 10$
- Shef chooses $P$ in advance and does not cheat

**Subtask #2 (20 points):**
- $M = 5$
- Shef chooses $P$ in advance and does not cheat

**Subtask #3 (70 points):** $M = 2$

### Example
```
You           Grader
              2
1 3
              0
2 3
              Yes
1 10
              2
1 3
              2
2 7
              Yes
```

### Explanation
**Example case 2:** Shef's first answer is $2$ because $10^2 = 100 \equiv 2$ modulo $7$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>