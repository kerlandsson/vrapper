<div class="newsbox">
    <div class="date">2015-01-04</div>
    <h4>(Lack of) Status Update</h4>
    <p>It's been a month since 0.50.0 was released so I figured I should stick
    with my monthly status updates and tell you about the recent changes.
    However, there is nothing to report. Since 0.50.0 was released there hasn't
    been a single line of code changed and there hasn't been a single defect
    filed.  December is usually a slow month for us anyway, but I'm surprised we
    haven't had any defects filed either. I guess 0.50.0 must be a rock-solid
    release (or you guys must all be busy during December too).</p>
    <p>I hope you all enjoy Vrapper 0.50.0!</p>
</div>
<div class="newsbox">
    <div class="date">2014-12-07</div>
    <h4>0.50.0 Released</h4>
    
    <p>0.50.0 has been released, continuing with our two-month release cycle. At
    this point, I think I've been fully relegated to Project Manager status as
    albertdev has stepped up and handled basically all development in this
    release.  He's much better at this than I am and Vrapper is stronger for it.
    I'll take credit for resurrecting this project when the original authors
    abandoned it, but albertdev is the one who is able to fix the really
    difficult defects and introduce tough new features.  Thank you albertdev for
    your amazing work!</p>
    
    <p>The following changes are included in 0.50.0:</p>
    
    <ul>
        <li>Added support for 'p'aste in visual block mode</li>
        <li>Added support for "* as a separate register on Linux</li>
        <li>Added support for the following 'clipboard' values: 'unnamedplus', 'autoselectplus', 'exclude:'</li>
        <li>Added support for 'g_' motion</li>
        <li>Added support for refreshing current file using ':e' with no arguments</li>
        <li>Added support for 'u' and 'U' in visual mode</li>
        <li>Fixed behavior of '{count}gT' to be more Vim-compliant</li>
        <li>Fixed issue with rendering command-line while scrolling</li>
        <li>Fixed issue with moving the cursor while in insert mode, then repeating</li>
        <li>Fixed issue with 'S' while on an empty line with Windows line-endings</li>
        <li>Fixed issue with eclipseaction in a vnoremap</li>
        <li>Fixed issue with ':reg' and ':marks' in Java 8</li>
        <li>Fixed issue with visual display of selecting a newline</li>
        <li>Fixed issue with incremental search highlight when match is under the cursor</li>
        <li>Fixed issue with editing certain configuration files in IBM's Rational Software Architect IDE</li>
    </ul>
</div>
<div class="newsbox">
    <div class="date">2014-11-05</div>
    <h4>Updates to unstable update site</h4>
    
    <p>It's been another month, time for your monthly status update with Vrapper.
    We've made the following changes on the unstable update site:</p>
    
    <ul>
        <li>Added new "line" text object plugin</li>
            <ul>
            <li>'al' for column 0 to end-of-line</li>
            <li>'il' for first non-whitespace character to last non-whitespace character of a line</li>
            <li>Port of <a href="http://www.vim.org/scripts/script.php?script_id=3886">http://www.vim.org/scripts/script.php?script_id=3886</a></li>
            </ul>
        <li>Added support for 'gI' (insert at column 0)</li>
        <li>Added support for ':cmap'</li>
        <li>Fixed issue where word text objects would stop at unicode characters</li>
        <li>Fixed issue with 'O' on the line below a closed fold</li>
        <li>Fixed issue where 'q' (record macro) couldn't be re-mapped</li>
        <li>Fixed issue with 'A' in visual-block mode</li>
        <li>Fixed issue with '>' indent command with counts in visual mode</li>
        <li>Fixed issue which prevented a custom ':command' from using ':normal'</li>
        <li>Fixed issue where '\t' in substituion text couldn't be escaped</li>
        <li>Fixed styling issues in status bar</li>
        <li>Fixed behavior when toggling between visual mode and visual-line mode</li>
        <li>Changed 'ge', 'gE', and 'w' to be more vim-compliant in visual mode</li>
        <li>Various refactoring of old defect fixes</li>
    </ul>
</div>
<div class="newsbox">
    <div class="date">2014-10-05</div>
    <h4>0.48.0 Released</h4>
    
    <p>Vrapper version 0.48.0 has been released, back on schedule with our
    two-month release cycle.  The only changes since the last news post were
    more esoteric bug fixes. The following fixes are included in 0.48.0:</p>
    
    <ul>
        <li>Fixed issue with cursor placement after multi-line 'gp'</li>
        <li>Fixed issue using counts with 'o' command</li>
        <li>Fixed behavior for 2di' and 2yi' around whitespace</li>
        <li>Fixed issue with '*' and '#' when 'smartcase' is enabled</li>
        <li>Fixed issue where red error text wouldn't disappear from status bar</li>
        <li>Fixed issue with hitting backspace as soon as you enter insert mode then hitting '.' to repeat insertion</li>
        <li>Fixed issue with performing multiple searches while in visual mode</li>
        <li>Fixed issues with `[ and `] not updating after a delete or after 'p'</li>
    </ul>
</div>
<div class="newsbox">
    <div class="date">2014-09-07</div>
    <h4>Updates to unstable update site<br/>(plus a minor rant)</h4>
    
    <p>Time for another monthly status update on Vrapper.  For the last couple
    years, our GitHub Issues page has hovered around 30 open defects/feature
    requests. Defects have been filed and fixed and we always seemed to have
    about 30 open at any given time.  This last month brought with it what I'm
    going to call some "overzealous" new users.  We jumped from having ~30
    defects to having over 50 in one month.  13 of those issues were filed by a
    single person.  Now, I don't take this as a sign that Vrapper is unstable. I
    may be overly optimistic here, but I think it's actually because Vrapper has
    reached a point where we meet about 95% of most users' use cases.  We're
    down to the esoteric features and nit-picking defects; which is to say, the
    really hard stuff.  Just take a look at the current changes on our unstable
    update site:</p>
    
    <ul>
        <li>Added support for 'c_&lt;C-R&gt;_&lt;C-W&gt;' and 'c_&lt;C-R&gt;_&lt;C-A&gt;'</li>
        <ul>
        	<li>Insert word under cursor into command-line</li>
        </ul>
        <li>Added support for 'n' flag in substitutions</li>
        <ul>
         	<li>Count matches without performing substitution</li>
        </ul>
        <li>Fixed issue with using counts on a non-linewise paste</li>
        <li>Fixed issue with '}' in visual mode with ipmotion.vim plugin</li>
        <li>Fixed issue with 'incsearch' and '?' search mode</li>
        <li>Fixed issue with cursor position after a 'u' undo</li>
        <li>Fixed issue with ']' mark after deleting text</li>
        <li>Fixed issue with cursor position in visual mode when using "selection=exclusive"</li>
        <li>Fixed issue with performing multiple searches while in visual mode</li>
        <li>Fixed issue with enabling Vrapper while a text selection was active</li>
        <li>Fixed issue with pasting on an empty line with windows newlines</li>
        <li>Fixed issues with Vrapper interacting with Perforce plugin</li>
    </ul>

    <p>There are very few items in that list that I think are generally
    applicable or would affect a large number of users (and those are just the
    items we were able to fix).  Hopefully this is a sign that the majority of
    our users are happy with Vrapper.  Hopefully the majority of our users
    aren't even running into most of the defects we're fixing at this point.</p>
    
    <p>
    <b>**Changes in behavior**</b><br/>
	One last thing.  I removed a couple configurable options which nobody should've
	been using anyway.  We had support for <b>"saney"</b> and <b>"sanecw"</b> which would modify
	the behavior of 'Y' and 'cw' to be more consistent with other Vim commands
	(despite our 'Y' and 'cw' being consistent with Vim's 'Y' and 'cw').  I removed
	these options because Vim's own documentation says to use ":map Y y$" and ":map
	cw dwi" if you want that "sane" behavior.  I think our "saney" and "sanecw"
	options were added before Vrapper had support for ":map" but they are no longer
	necessary since we've had ":map" for a while now.</p>
</div>
<div class="newsbox">
    <div class="date">2014-08-08</div>
    <h4>0.46.0 Released</h4>
    
    <p>If I was sticking closely to my two-month release cycle I would've released last week.
    However, there weren't too many changes in this release.  I also had just fixed a defect
    and I wanted to make sure my fix solved the problem.  Now, a week later, I'm releasing 0.46.0.
    Here are the changes since the last news post (included in 0.46.0):</p>
    
    <ul>
        <li>Changed 'syncmodifiable' to ignore Eclipse's readonly flag by default.  This should help some Perforce users.</li>
        <li>Fixed issue where selecting from the end of the line backwards would skip the last character</li>
        <li>Fixed issue where Vrapper would stay in VisualMode after Eclipse cleared the selection</li>
        <li>Fixed issue where a visual selection could jump to the beginning of the next line</li>
        <li>Fixed issue where Mac command key was ignored.  It is now treated as Ctrl.</li>
        <li>Fixed issue with 'i_Ctrl-Y' after 'A'.</li>
    </ul>
</div>
<div class="newsbox">
    <div class="date">2014-07-05</div>
    <h4>Updates to Unstable update site</h4>
    
    <p>Another month, another status update for Vrapper.  In the past
    month, we've made the following changes to the unstable update site:</p>
    
    <ul>
        <li>Added support for ':command' to define custom user commands</li>
        <li>Fixed issue where 'softtabstop' broke multi-character mappings (like 'imap jj &lt;esc&gt;')</li>
        <li>Fixed issue where you couldn't use unicode characters in .vrapperrc</li>
        <li>Fixed issue with mapping '0' to something then using counts for a command</li>
        <li>Fixed issue with 'R' replace mode at the end of a file</li>
        <li>Fixed issue with using &lt;TAB&gt; in a macro</li>
        <li>Fixed issue where you couldn't use a space in the right-hand side of a mapping</li>
        <li>Fixed issue preventing you from mapping '&lt;c-/&gt;' to anything</li>
    </ul>

    <p>Surround Plugin changes:</p>
    <ul>
    	<li>Added ability to define custom surrounds by editor type</li>
    	<ul>
            <li>au "Java" surround c /*\r*/</li>
            <li>au "XML"  surround c &lt;!--\r--&gt;</li>
    	</ul>
    </ul>

    <p>Split Editor Plugin changes:</p>
    <ul>
        <li>Fixed issue with cursor location in a new split </li>
    </ul>
</div>
<div class="newsbox">
    <div class="date">2014-06-01</div>
    <h4>0.44.0 Released</h4>
    
    <p>It seems we're still sticking with this 2-month release cycle.
    0.44.0 has been released and is primarily a bug-fix release with a ton
    of defects fixed.  In addition to last month's list of fixes, 0.44.0
    includes the following changes:</p>
    
    <ul>
        <li>Fixed XML tag 't' text object to ignore JSP tags</li>
        <li>Fixed issue where accidentally using XML tag 't' text object in a non-XML file would cause StackOverflowError</li>
        <li>Fixed issue with multi-character mappings affecting regular commands</li>
        <li>Fixed issue to keep cursor visible when swapping visual selection sides</li>
        <li>Fixed issue where named register was sometimes still active after an operation</li>
        <li>Modified behavior of new "syncmodifiable" property</li>
        <ul>
          <li>Now a string rather than a boolean, valid values are 'matchreadonly' and 'nosync'</li>
          <li>'matchreadonly' will set Vrapper's read-only flag to the state of Eclipse's read-only flag (this is the default)</li>
          </ul>
        <li>Other miscellaneous improvements of fixes made last month</li>
    </ul>

    <p>Split Editor Plugin changes:</p>
    <ul>
        <li>Added support for ':split' commands in detached windows</li>
        <li>Fixed 'gt' behavior</li>
        <ul>
          <li>Added ':wincmd n/p' and '&lt;C-W&gt;gt/gT' (which can be mapped to 'gt/gT')</li>
        </ul>
        <li>Fixed issue where a cloned editor would place its cursor at the beginning of the file</li>
    </ul>
</div>
<div class="newsbox">
    <div class="date">2014-05-04</div>
    <h4>Updates to unstable update site</h4>

    <p>Time for your monthly status update on Vrapper.  We've got another long
    list of changes in the last month since 0.42.0 was released.</p>
    
    <p>First of all, there was a defect in 0.42.0 where the '?' command (reverse
    search) simply didn't work. I was tempted to release a 0.42.1 with this
    defect fixed since it seems like such a fundamental feature. However, it
    actually took a couple weeks for anyone to find it.  This tells me that the
    '?' feature isn't actually used that often.  So we've fixed this defect on
    the unstable update site but I think it can probably wait for 0.44.0 to be
    in a stable release.  If you actually use the '?' feature a lot and noticed
    it was broken, you'll have to update to the latest unstable build or wait
    another month to receive the fix.  Sorry for breaking such a basic
    feature.</p>
    
    <p>On to the list of changes since 0.42.0 was released:</p>
    
    <ul>
        <li>Added 'N%' feature to jump to a percent of the file</li>
        <li>Add searches from '*' and '#' to search history</li>
        <li>Added support for searches with '\&lt;' and '\&gt;'</li>
        <ul>
           <li>Maps to Eclipse's '\b' regex; we're still using Java regex under the hood</li>
        </ul>
        <li>Fixed issue where '?' (reverse search) was broken</li>
        <li>Fixed issue with using counts before a register switch command</li>
        <li>Fixed issue with using counts before an omap'd command</li>
        <li>Fixed issue with using counts and InsertMode</li>
        <li>Fixed issue with using counts after a command and before a motion</li>
        <li>Fixed issue with 'w' not jumping over windows line-endings</li>
        <li>Fixed issue where commands that take arbitrary characters (f/F/t/T/m) were affected by omap mappings</li>
        <li>Fixed issue where 'scrolloffset' and 'scrolljump' were ignored when jumping to a mark</li>
        <li>Fixed issue where Vrapper appeared to modify read-only files</li>
        <ul>
        <li>Added 'modifiable' and 'syncmodifiable' to set 'modifiable' when Eclipse says the file is read-only</li>
        </ul>
        <li>Fixed issue where Vrapper would re-enable itself if Vrapper was disabled and text was selected (while 'visualmouse' option set)</li>
        <li>Fixed issue with cursor position in '(insert) VISUAL' mode</li>
        <li>Fixed issue with double-clicking to select a word in '(insert) VISUAL' mode</li>
        <li>Fixed issue with deleting too many pending characters during a mapping in InsertMode when unprintable key presses (Ctrl/Alt) were used </li>
        <li>Fixed long-standing annoyance where cursor would appear after the end of a line when clicking with the mouse</li>
        <li>Other various internal fixes (refactoring)</li>
    </ul>
</div>
<div class="newsbox">
    <div class="date">2014-04-06</div>
    <h4>0.42.0 Released</h4>

    <p>It seems springtime brought some new life for Vrapper development after
    such a slow winter. 0.42.0 has been released and just look at the list of
    changes made in the last month (included in 0.42.0):</p>
    
    <ul>
        <li>Added new plugin for exchange.vim port</li>
        <ul>
            <li>based on <a href="https://github.com/tommcdo/vim-exchange">https://github.com/tommcdo/vim-exchange</a></li>
            <li>cx&lt;text object&gt; highlights a text object</li>
            <li>cx&lt;text object&gt; again swaps text object with highlighted text object</li>
        </ul>
        <li>Added support for 'gvimargs' property</li>
        <ul>
            <li>Defines args sent to 'gvimpath' for use by :vim command</li>
            <li>Uses placeholder strings {line}, {col}, and {file}</li>
            <li>Defaults to: +{line} -c normal zv{col}| -c set nobackup -f -n {file}</li>
        </ul>
        <li>Added support for 'ad hoc delimiter' m&lt;char&gt;</li>
        <ul>
            <li>Based on a Vim patch which has not yet been merged into Vim</li>
            <li><a href="https://groups.google.com/forum/#!searchin/vim_dev/im$20am/vim_dev/pZxLAAXxk0M/wdOgpOQ05Z8J">Google Groups discussion</a></li>
            <li>Use m&lt;char&gt; with i/a to match strings delimited by any arbitrary &lt;char&gt;</li>
            <li>For example, 'vim*' will select (in VisualMode) the text between two '*' characters</li>
            <li>**Modified methodtextobj.vim plugin to use 'f' rather than 'm' to avoid this collision**</li>
        </ul>
        <li>Added support for '(insert) VISUAL' mode</li>
        <ul>
            <li>Highlighting text while in InsertMode moves into '(insert) VISUAL' mode for a single visual operation, then returns to InsertMode</li>
        </ul>
        <li>Added support for ':let @&lt;char&gt;=' to set register contents via command-line</li>
        <ul>
            <li>Using ':let' ONLY supports setting registers right now</li>
        </ul>
        <li>Added ability to map '|' character using '&lt;BAR&gt;'</li>
        <li>Fixed issue with Vrapper not re-initializing when Eclipse re-uses editors</li>
        <ul>
            <li>For the "Close editors automatically" feature in Eclipse</li>
        </ul>
        <li>Fixed issue with :eclipseaction from command-line of an editor</li>
        <li>Fixed issue with :eclipseaction being defined statically for all editors</li>
        <li>Fixed issue with :surround command in Surround.vim plugin</li>
        <li>Fixed issue with mappings which use '&lt;' or '&gt;' character</li>
        <li>Fixed issue with search strings that end in a backslash</li>
        <li>Fixed issue where :t/:move/:copy were requiring a space after the command (which Vim doesn't require)</li>
        <li>Fixed issue with map and noremap not including omap</li>
        <li>Fixed issue with cursor position when exiting visual line mode</li>
        <li>Fixed issue swapping between beginning and end of a visual selection when Windows line-endings are present</li>
        <li>Fixed issue where having a visual selection, moving into command-line mode, then hitting &lt;ESC&gt; didn't clear the selection</li>
        <li>Fixed issue where executing a macro wasn't a single undo-able operation</li>
        <li>Fixed issue with visually selecting the last character in a file</li>
        <li>Fixed display issue when restoring a reversed selection</li>
        <li>Refactored how text objects are defined to better support plugins</li>
    </ul>
    
    <p>I occasionally like to include some shameless self-congratulation when
    releasing a new version.  I searched Twitter for 'Vrapper' and here are some
    of my favorite tweets about Vrapper.  Thank you for all the love!</p>
    <p>‏@RobertFischer: Installed Vrapper and rebooted Eclipse. The skies opened opened up,
    angels sang, a tear came to my eye. IDE Heaven.</p>
    <p>@bigtbigtbigt: Just discovered Vrapper for Eclipse after a long session of coding (I'm
    new to @EclipseFdn).  I am in heaven!</p>
    <p>@yottamoto: Just discovered the vrapper VI plugin for eclipse
    (http://vrapper.sourceforge.net/home/ ). Now, my day is made, And possibly,
    the rest of my days also.</p>
    <p>@NicolasBrailo: Vrapper: a real text editor for Eclipse</p>
    <p>@jmaicher: How could I have used eclipse without vrapper (vim-like editing
    in Eclipse)? Awesome tool, it just works! &lt;3</p>
    <p>@mojavelinux: OMG, my dev environment is complete! Just discovered
    vrapper, a *lightweight* vim mode for all #Eclipse editors</p>
</div>
<div class="newsbox">
    <div class="date">2014-03-02</div>
    <h4>Updates to unstable update site</h4>

    <p>It's been another slow month but I might as well give an update with
    the changes to the unstable update site since 0.40.0 released:</p>
    
    <ul>
        <li>Added support for '@:' to repeat last command-line command</li>
        <li>Added support for ':marks' command</li>
        <li>Added support for ':reg[isters]' command</li>
        <li>Fixed issue with 'gv' after modifying lines</li>
        <li>Fixed issue with visual mode editing at the end of a file</li>
    </ul>
    
</div>
<div class="newsbox">
    <div class="date">2014-02-08</div>
    <h4>0.40.0 Released</h4>

    <p>0.40.0 has been released.  This release is smaller than most but I'm
    keeping with my two-month release cycle one more time.  The following changes
    were added since the last status update and are included in 0.40.0:</p>

    <ul>
        <li>Created new optional plugin for clang-format</li>
        <li>Added support for ':y[ank] [x]' to yank into register</li>
        <li>Added support for 'iskeyword' property</li>
        <li>Added support for ':xa[ll]'</li>
        <li>Added support for 'startnormalmode' property</li>
        <ul>
            <li>When true, always start in NormalMode after changing tabs</li>
        </ul>
        <li>Fixed issue with ';' after 'T'</li>
        <li>Fixed \c and \C in substitution definitions</li>
        <li>Fixed issue where &lt;S-Space&gt; wasn't being recognized</li>
    </ul>
    
    <p>I'd like to thank all the contributors who continue keeping this project
    going even when I'm too busy to spend time with it myself.  Your dedication
    helps keep this project alive!</p>
</div>
<div class="newsbox">
    <div class="date">2014-01-05</div>
    <h4>Updates to unstable update site</h4>

    <p>As I mentioned in my last post, real life has been getting in the way of
    me spending time with Vrapper.  The holidays certainly didn't help things
    either. This was a slow month for Vrapper but here's your monthly status
    update.  The following changes have been made to the unstable update
    site:</p>

    <ul>
        <li>Added support for 'omap' commands</li>
        <li>Added support for :tabs command</li>
        <li>Added support for '[[', ']]', '[]', and ']['</li>
        <li>Fixed issue with 'O' near a blank line with Windows line-endings</li>
        <li>Fixed issue using counts with mapped keys</li>
    </ul>
    
    <p>I'll probably still release 0.40.0 in a month but after that I might relax my
    two-month release cycle to be whenever a release is worthwhile.</p>
</div>
<div class="newsbox">
    <div class="date">2013-12-08</div>
    <h4>0.38.0 Released</h4>

    <p>Still sticking with our two-month release cycle, 0.38.0 is now released.
    Changes since the last status update (included in 0.38.0) are:</p>

    <ul>
        <li>Added :set contentassistmode</li>
        <ul>
            <li>Enables &lt;c-n&gt; and &lt;c-p&gt; in content-assist dropdown</li>
            <li>Use camap to map &lt;c-n&gt; or &lt;c-p&gt; to other keys</li>
        </ul>
        <li>Added :startinsert command</li>
        <li>Added 'method text object' optional plugin</li>
        <li>Fixed issue with chaining vi{i{i{</li>
        <li>Fixed autocmd when changing tabs</li>
        <li>Fixed v%</li>
        <li>Fixed 'dw' on last word of a line with Windows line endings</li>
        <li>Fixed Alt key handling on keyboards with AltGr</li>
        <li>Fixed issue with newlines when pasting text</li>
    </ul>
    
    <p>Real life has been getting in the way recently, preventing me from
    spending time with Vrapper.  I'll do my best to stay on top of defects and
    feature requests but I'm afraid I might not be able to continue releasing
    every two months.  Or at least, the amount of changes in a given two-month
    period might not be enough to justify a release.  We'll see how it goes.</p>
</div>
<div class="newsbox">
    <div class="date">2013-11-04</div>
    <h4>Updates to unstable update site</h4>

    <p>It's time for your monthly status update on Vrapper.  Here are the
    current changes on the unstable update site.  Please feel free to install
    the latest build on the unstable update site and let us know if you find any
    defects.</p>

    <ul>
        <li>Fixed issue where escaped characters were being skipped with t/f motions</li>
        <li>Fixed issue with visual block mode starting on an empty line</li>
        <li>Fixed autocmd on multi-page editors (like XML Editor)</li>
        <li>Fixed Ctrl+I in NormalMode (and added TAB in NormalMode for the same operation)</li>
        <li>Added eclipseuiaction for mapping any Eclipse operation that pops up a dialog</li>
        <li>Added support for [m, ]m, [M, and ]M</li>
        <li>Added support for :setlocal command</li>
        <li>Added support for shiftround setting</li>
    </ul>

    <b>**Changes in behavior**</b><br/>
    The following changes modify existing behavior from previous versions of Vrapper:
    <ul>
        <li>Refactored &gt;&gt; and &lt;&lt; to use shiftwidth, tabstop, expandtab, and shiftround settings rather than using Eclipse's settings</li>
        <li>Enable regexsearch property by default.  This matches Vim behavior more closely.</li>
    </ul>
</div>

<a href="old_index.php">Older Posts &gt;&gt;</a><br/>