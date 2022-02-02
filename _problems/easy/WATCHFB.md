---
{"category_name":"easy","problem_code":"WATCHFB","problem_name":"Chef and Football Match","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n6\r\n2 0 1\r\n1 3 1\r\n2 2 4\r\n2 5 6\r\n2 8 8\r\n2 9 10","output":"NO\r\nYES\r\nYES\r\nNO\r\nYES\r\nNO","explanation":"**Example case 1:**\r\n- Reply 1: Chef cannot know who scored the first goal.\r\n- Reply 2: Chefu told Chef that their favourite team has scored $3$ goals so far.\r\n- Reply 3: Chef can conclude that his favourite team has scored $4$ goals, since it already scored $3$ goals earlier.\r\n- Reply 4: the favourite team could have scored $5$ or $6$ goals, but there is no way to know which option is correct.\r\n- Reply 5: since there is a tie, Chef knows that his favourite team has scored $8$ goals.\r\n- Reply 6: again, Chef cannot know if his favourite team has scored $9$ or $10$ goals.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"26-09-2019","tags":{"0":"deadwing97","1":"kingofnumbers","2":"ltime76"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/WATCHFB","time":{"view_start_date":1569690002,"submit_start_date":1569690002,"visible_start_date":1569690002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=WATCHFB","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME76/hindi/WATCHFB.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME76/bengali/WATCHFB.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME76/mandarin/WATCHFB.pdf), [Russian](https://www.codechef.com/download/translated/LTIME76/russian/WATCHFB.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME76/vietnamese/WATCHFB.pdf) as well.

Chef and his son Chefu want to watch a match of their favourite football team playing against another team, which will take place today.

Unfortunately, Chef is busy in the kitchen preparing lunch, so he cannot watch the match. Therefore, every now and then, Chef asks Chefu about the current scores of the teams and Chefu tells him the score. However, Chefu sometimes does not specify the teams along with the score — for example, he could say "the score is 3 to 6", and there is no way to know just from this statement if it was their favourite team or the other team that scored 6 goals; in different statements, the order of teams may also be different. Other times, Chefu specifies which team scored how many goals.

Chef asks for the score and receives a reply $N$ times. There are two types of replies:
- `1 A B`: their favourite team scored $A$ goals and the other team scored $B$ goals
- `2 A B`: one team scored $A$ goals and the other scored $B$ goals

Chef is asking you to help him determine the score of his favourite team after each of Chefu's replies. After each reply, based on the current reply and all previous information (but without any following replies), tell him whether it is possible to certainly determine the number of goals scored by his favourite team.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The following $N$ lines describe Chefu's replies in the format described above.

### Output
For each of Chefu's replies, print a single line containing the string `"YES"` if it is possible to determine the score of Chef's favourite team after this reply or `"NO"` if it is impossible.

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 10^4$
- $0 \le A, B \le 10^9$
- the sum of $N$ over all test cases does not exceed $10^5$
- there is at least one valid sequence of scored goals consistent with all replies

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
1
6
2 0 1
1 3 1
2 2 4
2 5 6
2 8 8
2 9 10
```

### Example Output
```
NO
YES
YES
NO
YES
NO
```

### Explanation
**Example case 1:**
- Reply 1: Chef cannot know who scored the first goal.
- Reply 2: Chefu told Chef that their favourite team has scored $3$ goals so far.
- Reply 3: Chef can conclude that his favourite team has scored $4$ goals, since it already scored $3$ goals earlier.
- Reply 4: the favourite team could have scored $5$ or $6$ goals, but there is no way to know which option is correct.
- Reply 5: since there is a tie, Chef knows that his favourite team has scored $8$ goals.
- Reply 6: again, Chef cannot know if his favourite team has scored $9$ or $10$ goals.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>