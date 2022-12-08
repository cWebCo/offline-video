<?php
// This file was auto-generated from sdk-root/src/data/nimble/2020-08-01/waiters-2.json
return [ 'version' => 2, 'waiters' => [ 'LaunchProfileDeleted' => [ 'description' => 'Wait until a LaunchProfile is Deleted. Use this after invoking DeleteLaunchProfile', 'delay' => 5, 'maxAttempts' => 150, 'operation' => 'GetLaunchProfile', 'acceptors' => [ [ 'matcher' => 'path', 'argument' => 'launchProfile.state', 'state' => 'success', 'expected' => 'DELETED', ], [ 'matcher' => 'path', 'argument' => 'launchProfile.state', 'state' => 'failure', 'expected' => 'DELETE_FAILED', ], ], ], 'LaunchProfileReady' => [ 'description' => 'Wait until a LaunchProfile is Ready. Use this after invoking CreateLaunchProfile or UpdateLaunchProfile', 'delay' => 5, 'maxAttempts' => 150, 'operation' => 'GetLaunchProfile', 'acceptors' => [ [ 'matcher' => 'path', 'argument' => 'launchProfile.state', 'state' => 'success', 'expected' => 'READY', ], [ 'matcher' => 'path', 'argument' => 'launchProfile.state', 'state' => 'failure', 'expected' => 'CREATE_FAILED', ], [ 'matcher' => 'path', 'argument' => 'launchProfile.state', 'state' => 'failure', 'expected' => 'UPDATE_FAILED', ], ], ], 'StreamingImageDeleted' => [ 'description' => 'Wait until a StreamingImage Deleted. Use this after invoking DeleteStreamingImage', 'delay' => 2, 'maxAttempts' => 60, 'operation' => 'GetStreamingImage', 'acceptors' => [ [ 'matcher' => 'path', 'argument' => 'streamingImage.state', 'state' => 'success', 'expected' => 'DELETED', ], [ 'matcher' => 'path', 'argument' => 'streamingImage.state', 'state' => 'failure', 'expected' => 'DELETE_FAILED', ], ], ], 'StreamingImageReady' => [ 'description' => 'Wait until a StreamingImage is Ready. Use this after invoking CreateStreamingImage or UpdateStreamingImage', 'delay' => 2, 'maxAttempts' => 60, 'operation' => 'GetStreamingImage', 'acceptors' => [ [ 'matcher' => 'path', 'argument' => 'streamingImage.state', 'state' => 'success', 'expected' => 'READY', ], [ 'matcher' => 'path', 'argument' => 'streamingImage.state', 'state' => 'failure', 'expected' => 'CREATE_FAILED', ], [ 'matcher' => 'path', 'argument' => 'streamingImage.state', 'state' => 'failure', 'expected' => 'UPDATE_FAILED', ], ], ], 'StreamingSessionDeleted' => [ 'description' => 'Wait until a StreamingSessionDeleted. Use this after invoking Deletesession', 'delay' => 5, 'maxAttempts' => 180, 'operation' => 'GetStreamingSession', 'acceptors' => [ [ 'matcher' => 'path', 'argument' => 'session.state', 'state' => 'success', 'expected' => 'DELETED', ], [ 'matcher' => 'path', 'argument' => 'session.state', 'state' => 'failure', 'expected' => 'DELETE_FAILED', ], ], ], 'StreamingSessionReady' => [ 'description' => 'Wait until a StreamingSession is ready. Use this after invoking CreateStreamingSession, StartStreamingSession', 'delay' => 10, 'maxAttempts' => 180, 'operation' => 'GetStreamingSession', 'acceptors' => [ [ 'matcher' => 'path', 'argument' => 'session.state', 'state' => 'success', 'expected' => 'READY', ], [ 'matcher' => 'path', 'argument' => 'session.state', 'state' => 'failure', 'expected' => 'CREATE_FAILED', ], [ 'matcher' => 'path', 'argument' => 'session.state', 'state' => 'failure', 'expected' => 'START_FAILED', ], ], ], 'StreamingSessionStopped' => [ 'description' => 'Wait until a StreamingSessionStopped. Use this after invoking StopStreamingSession', 'delay' => 5, 'maxAttempts' => 180, 'operation' => 'GetStreamingSession', 'acceptors' => [ [ 'matcher' => 'path', 'argument' => 'session.state', 'state' => 'success', 'expected' => 'STOPPED', ], [ 'matcher' => 'path', 'argument' => 'session.state', 'state' => 'failure', 'expected' => 'STOP_FAILED', ], ], ], 'StreamingSessionStreamReady' => [ 'description' => 'Wait until a StreamingSessionStream is ready. Use this after invoking CreateStreamingSessionStream', 'delay' => 5, 'maxAttempts' => 30, 'operation' => 'GetStreamingSessionStream', 'acceptors' => [ [ 'matcher' => 'path', 'argument' => 'stream.state', 'state' => 'success', 'expected' => 'READY', ], [ 'matcher' => 'path', 'argument' => 'stream.state', 'state' => 'failure', 'expected' => 'CREATE_FAILED', ], ], ], 'StudioComponentDeleted' => [ 'description' => 'Wait until a StudioComponent Deleted. Use this after invoking DeleteStudioComponent', 'delay' => 1, 'maxAttempts' => 120, 'operation' => 'GetStudioComponent', 'acceptors' => [ [ 'matcher' => 'path', 'argument' => 'studioComponent.state', 'state' => 'success', 'expected' => 'DELETED', ], [ 'matcher' => 'path', 'argument' => 'studioComponent.state', 'state' => 'failure', 'expected' => 'DELETE_FAILED', ], ], ], 'StudioComponentReady' => [ 'description' => 'Wait until a StudioComponent is Ready. Use this after invoking CreateStudioComponent or UpdateStudioComponent', 'delay' => 2, 'maxAttempts' => 60, 'operation' => 'GetStudioComponent', 'acceptors' => [ [ 'matcher' => 'path', 'argument' => 'studioComponent.state', 'state' => 'success', 'expected' => 'READY', ], [ 'matcher' => 'path', 'argument' => 'studioComponent.state', 'state' => 'failure', 'expected' => 'CREATE_FAILED', ], [ 'matcher' => 'path', 'argument' => 'studioComponent.state', 'state' => 'failure', 'expected' => 'UPDATE_FAILED', ], ], ], 'StudioDeleted' => [ 'description' => 'Wait until a Studio is Deleted. Use this after invoking DeleteStudio.', 'delay' => 2, 'maxAttempts' => 60, 'operation' => 'GetStudio', 'acceptors' => [ [ 'matcher' => 'path', 'argument' => 'studio.state', 'state' => 'success', 'expected' => 'DELETED', ], [ 'matcher' => 'path', 'argument' => 'studio.state', 'state' => 'failure', 'expected' => 'DELETE_FAILED', ], ], ], 'StudioReady' => [ 'description' => 'Wait until a Studio is Ready. Use this after invoking CreateStudio, UpdateStudio, or StartStudioSSOConfigurationRepair', 'delay' => 2, 'maxAttempts' => 60, 'operation' => 'GetStudio', 'acceptors' => [ [ 'matcher' => 'path', 'argument' => 'studio.state', 'state' => 'success', 'expected' => 'READY', ], [ 'matcher' => 'path', 'argument' => 'studio.state', 'state' => 'failure', 'expected' => 'CREATE_FAILED', ], [ 'matcher' => 'path', 'argument' => 'studio.state', 'state' => 'failure', 'expected' => 'UPDATE_FAILED', ], ], ], ],];
