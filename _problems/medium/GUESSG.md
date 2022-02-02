---
{"category_name":"medium","problem_code":"GUESSG","problem_name":"Guessing Game","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"arthurfn","problem_tester":null,"date_added":"15-05-2020","tags":{"0":"ad","1":"arthurfn","2":"binary","3":"june20","4":"medium","5":"rajarshi_basu"},"problem_difficulty_level":"Medium","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/GUESSG","time":{"view_start_date":1592213402,"submit_start_date":1592213402,"visible_start_date":1592213402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GUESSG","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JUNE20/hindi/GUESSG.pdf), [Bengali](https://www.codechef.com/download/translated/JUNE20/bengali/GUESSG.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JUNE20/mandarin/GUESSG.pdf), [Russian](https://www.codechef.com/download/translated/JUNE20/russian/GUESSG.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JUNE20/vietnamese/GUESSG.pdf) as well.

**This is an interactive problem. Incase you are new to interactive problems, take a look at this [link](https://discuss.codechef.com/t/interactive-problems-and-the-way-to-deal-with-them/21185).**

Alice and Bob are playing a game. Initially, Alice has a hidden integer $x$; Bob only knows an integer $N$ such that $1 \le x \le N$ and he has to find $x$ by asking questions. In each question, Bob must choose an integer $y$ ($1 \le y \le N$), and Alice answers 'G', 'L' or 'E' based on whether $x \gt y$, $x \lt y$ or $x = y$ respectively.

However, to make things more interesting, they decided that Alice can lie sometimes. In particular, she cannot lie two times in a row and when $x = y$ (i.e. Bob found $x$), she has to answer 'E', so lying corresponds to answering 'G' when the correct answer is 'L' or vice versa. Alice can choose to lie at any time as long as she follows these rules.

As soon as Alice answers 'E' to some question, the game ends and Bob wins. Help Bob and win the game using no more than $K$ questions.

**Note:** The grader is adaptive ― the answer is not fixed at the start, but the answers to your questions are chosen in such a way that there is always at least one integer $x$ which is consistent with all answers (for some valid choice of answers that are lies).

### Interaction
- First, you should read a line containing a single integer $N$.
- Then, you should ask questions. To ask a question, print a line containing a single integer $y$. Then, you must read a line containing a single character: 'G', 'L' or 'E', denoting the answer to your question.
- As soon as the answer to one of your questions is 'E', you must terminate your program.

### Constraints
- $1 \le N \le 10^9$

### Subtasks
**Subtask #1 (15 points):** 
- $K = 300$
- Alice follows a simpler strategy: she either answers the second, fourth, sixth, etc. question or the first, third, fifth, etc. question truthfully, but she may or may not lie in all other questions

**Subtask #2 (30 points):**
- $K = 300$
- $N \le 100,000$

**Subtask #3 (30 points):** $K = 300$

**Subtask #4 (25 points):** $K = 120$

### Example
```
Grader              You
5
                    2
L
                    4
G
                    4
G
                    5
E
```

### Explanation
The hidden number is $x=5$. Alice decides to lie in the first question, so she has to tell the truth in the second question. In the third question, she decides to tell the truth, and in the final question, she answers 'E', since Bob asks about the correct value.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>