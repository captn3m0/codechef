---
{"category_name":"easy","problem_code":"UWCOI20F","problem_name":"Blocks","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"socho","problem_tester":null,"date_added":"24-02-2020","tags":{"0":"socho","1":"uwcoi20"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/UWCOI20F","time":{"view_start_date":1582655400,"submit_start_date":1582655400,"visible_start_date":1582655400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=UWCOI20F","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Our hero Kim has now managed to work his way through the cells, and arrives at the main vault of the entire operation. However, this vault is guarded by a password protected door, and what's more, the password seems to be of some length $N$ ($1 \leq N \leq 10^6$)!

Kim absolutely must get to the vault, in order to see what sorts of treasures Soum may be hiding. But, the issue is, he doesn't know the password $S$ needed to unlock the door. Even if he did know it, it would be too long for him to remember! 

Let's define the Maximum Repeating Block (MRB) of a string S, as the largest integer K, for which there exists another string Y, which when repeated K times, produces the string S.

- For example, the MRB of "hellohellohello" is 3, because there exists a string Y="hello" which when repeated 3 times produces the string "hellohellohello".
- Notice that K=1 also works, when the string Y="hellohellohello", but as K=3 is the maximum value, 3 is the MRB.


Kim needs to find the MRB of the hidden password, after which he can apply more tricks. But how? He doesn't even know the password…

Fortunately, from Kim's days as an inventor, he still has a secret device left over, which can point at a door, and answer questions about the password of the door. This device needs to be supplied with an index $i$ ($0 \leq i \leq N-1$), and it then tries to test the password, starting at index $i$, on the door. As soon as one of the characters it tests is incorrect, it will return the number of correct characters. Formally, given an index $i$, the device will return the length of the longest common prefix of the hidden password, and the suffix of the hidden password beginning at index $i$. Please refer to the samples for more details.

Kim wasn't as good at inventing as he was at being a detective, so his device will break after he asks it $Q$ questions. Can you help Kim find the MRB of the password with at most $Q$ questions?

###Interaction format:

The first line of input will contain $T$, number of testcases. Then the testcases follow. 

For each testcase, the first line of input will contain $N$, the length of the hidden string, and $Q$, the maximum number of queries you are allowed to ask.

To query some index, output $? x$ where $x$ is the index you'd like to query ($0 \leq x \leq N-1$)
You can then read in the answer to your query from standard input. If this answer is -1, then please terminate your program immediately.

To provide an answer, output $! K$ where $K$ is your answer.
After you provide your answer, read in a single integer from standard input. If this integer is 0, then continue processing the next testcase (if any). Otherwise, please terminate your program immediately.

###Subtasks

For this problem, your score depends on the number of queries your program asks. Let Q be the number of queries your program is allowed to ask for any testcase in that subtask.

For all subtasks, $1 \leq T \leq 10$ and $1 \leq N \leq 1000000$.

- Subtask 1 [28 points]: $Q = 240$
- Subtask 2 [33 points]: $Q = 20$
- Subtask 3 [39 points]: $Q = 9$

###Sample Input:
	1
	8 240
	0
	2
	0

###Sample Output:
	? 1
	? 3
	! 1
	
###EXPLANATION:

Consider Sample 1. 

Let's say the secret password $S$ is "heyhello". In this case, $N$ = 8, and Kim knows this at the start. Kim obviously doesn't know what $S$ itself is. Kim is given $Q = 240$ queries to find $K$.

If Kim asks a question with index $i = 1$, then the device tries "eyhello" as the password. The first character of "eyhello" is "e", but the first character of the secret password is "h". Therefore, the very first character is wrong, and the device returns $0$ (the number of correct characters).

If Kim asks a question with index $i = 3$, then the device tries "hello" as the password. The first character that the device tries is "h", and the first character of the password is "h". The device continues trying characters. The next character that the device tries is "e". The next character from the password is also "e". Once again, the device continues trying characters. The next character the device tries is "l", but the next character in the password is "y". This is incorrect, so the device stops trying more characters. It returns 2, because that is the number of correct characters.

With this information, Kim correctly deduces that the $MRB$ of $S$ is 1. He outputs "! 1" to submit his answer. He then reads in $0$, which indicates that his answer is alright, and proceeds.


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>