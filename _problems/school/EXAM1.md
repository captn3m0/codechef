---
{"category_name":"school","problem_code":"EXAM1","problem_name":"Multiple Choice Exam","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n6\r\nABCDAB\r\nABCDAB\r\n8\r\nDDCABCCA\r\nDNCBBBBA\r\n3\r\nCDD\r\nNDC","output":"6\r\n3\r\n1","explanation":"**Example case 1:** Chef\u0027s answers were all correct, so he got a full score.\r\n\r\n**Example case 2:** Chef did not answer question $2$ and he answered questions $4$ and $6$ incorrectly, which resulted in discarding answers to questions $5$ and $7$. Note that even though Chef\u0027s answer to question $7$ was wrong, it was discarded, so it did not result in discarding his answer to question $8$.\r\n\r\n**Example case 3:** Chef did not answer the first question and he answered the last question incorrectly, but there is no penalty for that.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/8WdjfFRCbM4","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SCM guile","38":"PERL6","39":"ERL","40":"CLPS","41":"ICK","42":"NICE","43":"PRLG","44":"ICON","45":"COB","46":"SCM chicken","47":"PIKE","48":"SCM qobi","49":"ST","50":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":"","date_added":"18-06-2019","tags":{"0":"cook","1":"cook107","2":"kingofnumbers"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/EXAM1","time":{"view_start_date":1561314600,"submit_start_date":1561314600,"visible_start_date":1561314600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EXAM1","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK107/hindi/EXAM1.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK107/mandarin/EXAM1.pdf), [Russian](https://www.codechef.com/download/translated/COOK107/russian/EXAM1.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK107/vietnamese/EXAM1.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK107/bengali/EXAM1.pdf) as well.

Chef is taking a cooking exam. The exam consists of $N$ multiple-choice questions numbered $1$ through $N$. In each question, Chef may choose one out of four choices: A, B, C and D, or leave the question unanswered.

Answering a question correctly gives Chef $1$ point. Not answering a question or answering it incorrectly gives him $0$ points. However, there is a penalty for wrong answers. Specifically, the questions are graded one by one from question $1$ to question $N$; for each $i$ ($1 \le i \le N-1$), if Chef answered the $i$-th question incorrectly, his answer to the next question (the $(i+1)$-th question) is discarded without being graded. If an answer is discarded, Chef gets $0$ points for it automatically, but even if it was wrong, the next answer is not discarded. There is no penalty for answering the last question incorrectly or for not answering some questions.

You are given the correct answers to all $N$ questions and Chef's answers. Calculate the total number of points Chef scored on the exam.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains a single string $S$ with length $N$. For each valid $i$, the $i$-th character of this string denotes the correct answer to the $i$-th question.
- The third line contains a single string $U$ with length $N$. For each valid $i$, the $i$-th character of this string is 'N' if Chef did not answer the $i$-th question; otherwise, it denotes Chef's answer to this question.

### Output
For each test case, print a single line containing one integer — Chef's score.

### Constraints 
- $1 \le T \le 100$
- $1 \le N \le 100$
- $S$ contains only characters 'A', 'B', 'C', 'D'
- $U$ contains only characters 'A', 'B', 'C', 'D', 'N'

### Example Input
```
3
6
ABCDAB
ABCDAB
8
DDCABCCA
DNCBBBBA
3
CDD
NDC
```

### Example Output
```
6
3
1
```

### Explanation
**Example case 1:** Chef's answers were all correct, so he got a full score.

**Example case 2:** Chef did not answer question $2$ and he answered questions $4$ and $6$ incorrectly, which resulted in discarding answers to questions $5$ and $7$. Note that even though Chef's answer to question $7$ was wrong, it was discarded, so it did not result in discarding his answer to question $8$.

**Example case 3:** Chef did not answer the first question and he answered the last question incorrectly, but there is no penalty for that.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>