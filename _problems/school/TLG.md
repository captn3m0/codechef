---
{"category_name":"school","problem_code":"TLG","problem_name":"The Lead Game","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"FORT","15":"FS","16":"GO","17":"HASK","18":"ICK","19":"ICON","20":"JAVA","21":"JS","22":"LISP clisp","23":"LISP sbcl","24":"LUA","25":"NEM","26":"NICE","27":"NODEJS","28":"PAS fpc","29":"PAS gpc","30":"PERL","31":"PERL6","32":"PHP","33":"PIKE","34":"PRLG","35":"PYPY","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM chicken","41":"SCM guile","42":"SCM qobi","43":"ST","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin","problem_tester":null,"date_added":"28-07-2009","tags":{"0":"admin","1":"array","2":"easy"},"editorial_url":"http://discuss.codechef.com/problems/TLG","time":{"view_start_date":1248791554,"submit_start_date":1248791554,"visible_start_date":1248791554,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p> The game of billiards involves two players knocking 3 balls around
on a green baize table. Well, there is more to it, but for our
purposes this is sufficient.</p>

<p> The game consists of several rounds and in each round both players
obtain a score, based on how well they played. Once all the rounds
have been played, the total score of each player is determined by
adding up the scores in all the rounds and the player with the higher
total score is declared the winner.</p>

<p> The Siruseri Sports Club organises an annual billiards game where
the top two players of Siruseri play against each other. The Manager
of Siruseri Sports Club decided to add his own twist to the game by
changing the rules for determining the winner. In his version, at the
end of each round the leader and her current lead are calculated. Once
all the rounds are over the player who had the maximum lead at the
end of any round in the game is declared the winner.
</p>

<p>
Consider the following score sheet for a game with 5 rounds:
</p>

<pre style="margin:15px">
    Round     Player 1       Player 2

      1             140                 82
      2              89                 134 
      3              90                 110 
      4              112              106
      5              88                  90 
</pre>

<p>
The total scores of both players, the leader and the lead after
each round for this game is given below:</P>

<pre style="margin:15px">
    Round      Player 1       Player 2     Leader     Lead

      1               140           	 82        Player 1     58
      2               229           	216       Player 1     13
      3               319           	326       Player 2      7
      4               431           	432       Player 2      1
      5               519           	522       Player 2      3
</pre>

<p> The winner of this game is Player 1 as he had the maximum lead (58
at the end of round 1) during the game.</p>

<p> Your task is to help the Manager find the winner and the winning
lead. You may assume that the scores will be such that there will
always be a single winner.  That is, there are no ties.</p>

<p style="font-weight: bold">Input</p>

<p> The first line of the input will contain a single integer N (N
≤ 10000) indicating the number of rounds in the game.  Lines
2,3,...,N+1 describe the scores of the two players in the N rounds.
Line i+1 contains two integer Si and Ti, the scores of the Player 1
and 2 respectively, in round i.  You may assume that 1 ≤ Si ≤
1000 and 1 ≤ Ti ≤ 1000.  </p>

<p style="font-weight: bold">Output</p>

<p> Your output must consist of a single line containing two integers
W and L, where W is 1 or 2 and indicates the winner and L is the
maximum lead attained by the winner.</p>

<p style="font-weight: bold">Example</p>

<p style="font-weight: bold">Input:</p>

<pre>
5
140 82
89 134
90 110
112 106
88 90
</pre>


<p style="font-weight: bold">Output:</p>

<pre>
1 58
</pre>
